// Fonction executée lors de l'utilisation du clic droit.
$(document).bind("contextmenu",function()
{
// Si vous voulez ajouter un message d'alerte

// On indique au navigateur de ne pas réagir en cas de clic droit.
return false;
});


$(document).on("click", ".toggle-text-button", function() {

  // Check if text is more or less
  if ($(this).text() == "Read More") {

    // Change link text
    $(this).text("Read Less");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide down
    $(this).parent().children(".toggle-textee").slideDown();
	$('html, body').animate({ scrollTop:  $(".toggle-textee").offset().top - 300 }, 'slow');
    
  } else {


    // Change link text
    $(this).text("Read More");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide up 
    $(this).parent().children(".toggle-textee").slideUp();
	$('html, body').animate({ scrollTop:  $(".toggle-text-button").offset().top - 600 }, 'slow');
    
  }
  
});
$(document).on("click", ".toggle-text-buttonn", function() {

  // Check if text is more or less
  if ($(this).text() == "Read More") {

    // Change link text
    $(this).text("Read Less");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide down
    $(this).parent().children(".toggle-texteee").slideDown();
	$('html, body').animate({ scrollTop:  $(".toggle-texteee").offset().top - 430 }, 'slow');
    
  } else {


    // Change link text
    $(this).text("Read More");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide up 
    $(this).parent().children(".toggle-texteee").slideUp();
	$('html, body').animate({ scrollTop:  $(".toggle-text-buttonn").offset().top - 600 }, 'slow');
    
  }
  
});
$(document).on("click", ".toggle-text-buttonnn", function() {

  // Check if text is more or less
  if ($(this).text() == "Read More") {

    // Change link text
    $(this).text("Read Less");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide down
    $(this).parent().children(".toggle-texteeee").slideDown();
	$('html, body').animate({ scrollTop:  $(".toggle-texteeee").offset().top - 300 }, 'slow');
    
  } else {


    // Change link text
    $(this).text("Read More");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide up 
    $(this).parent().children(".toggle-texteeee").slideUp();
	$('html, body').animate({ scrollTop:  $(".toggle-text-buttonnn").offset().top - 600 }, 'slow');
    
  }
  
});

