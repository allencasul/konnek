//post
document.getElementById("post").addEventListener("click", function(){
    document.querySelector(".flex").style.display = "flex";
});

document.querySelector('.plus').addEventListener('click', function(){
	document.querySelector('.flex').style.display = 'none';
});

//menu
    document.getElementById("menu").addEventListener("click", function(){
    document.querySelector(".flex2").style.display = "flex";
});

setInterval(function(){
	$('#stage').load('postock-function-display.php').fadeIn('slow');
}, 1000);

$(document).ready(function(){
    $('#click').click(function(){
        var post = $('#text').val();
        if(post == '')
        {
            alert("Please write something to post!");
        }
    });
});

$(document).ready(function(){  
    $('#click').click(function(){  
     var image_name = $('#image').val();  
     if(image_name == '')  
     {  
          alert("Select an image to upload!");  
          return false;  
     }  
     else  
     {  
          var extension = $('#image').val().split('.').pop().toLowerCase();  
          if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
          {  
               alert('Your selected file is not supported!');  
               $('#image').val('');  
               return false;  
          }  
     }  
});  
});  







