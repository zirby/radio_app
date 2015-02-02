/**
 * @author Christian ZIRBES
 */

$(document).ready(function(){


	$('#ff').form( {
	    url: "php/form2_proc.php",
	    onSubmit: function(){
	        // do some check
	        // return false to prevent submit;
	    },
	    success:function(data){
	        var data = eval('(' + data + ')');  // change the JSON string to javascript object
	        if (data.success){
	            console.log(data.message);
		    }else{
		    	console.log(data.message);
		    }
		}
	});
	
	$('#btnAddRadio').click(function(){
		$('#ff').form('submit');
	});

	$('#btnShowRadio').click(function(){
		$.ajax({
		  url: "php/showradios.php?name=toto",
		  dataType: "html"
		})
		  .done(function( html ) {
		    $( "#pRadios" ).append( html );
		  });
	});

	
});