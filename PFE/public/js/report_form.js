$(document).ready(function() {
      
  // Smart Wizard
  $('#smartwizard').smartWizard({
        // selected: 0,  // Initial selected step, 0 = first step 
        // keyNavigation:true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
        // autoAdjustHeight:true, // Automatically adjust content height
        // cycleSteps: false, // Allows to cycle the navigation of steps
        // backButtonSupport: true, // Enable the back button support
        // useURLhash: true, // Enable selection of the step based on url hash
        lang: {  // Language variables
            next: 'Suivant', 
            previous: 'Précédent'
        },
        toolbarSettings: {
            toolbarPosition: 'top', // none, top, bottom, both
            toolbarButtonPosition: 'right', // left, right
            showNextButton: true, // show/hide a Next button
            showPreviousButton: true, // show/hide a Previous button
            toolbarExtraButtons: [
  $('<button></button>').text('Terminer')
            .addClass('btn btn-info')
            .on('click', function(){ 
              var confirmed = confirm("Clôturer la mission d'audit?");
              if(confirmed){
                var id = $('#report-id').val();
                jQuery.ajax({
                    url: "http://localhost:8000/api/missions/finish/"+id,
                    method: 'get',
                    
                    success: function(result){
                       location.href="http://localhost:8000/missions"
                }});
              }                            
            })
                  ]
        }, 
        // anchorSettings: {
        //     anchorClickable: true, // Enable/Disable anchor navigation
        //     enableAllAnchors: false, // Activates all anchors clickable all times
        //     markDoneStep: true, // add done css
        //     enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        // },            
        // contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
        // disabledSteps: [],    // Array Steps disabled
        // errorSteps: [],    // Highlight step with errors
        // theme: 'dots',
        transitionEffect: 'slide', // Effect on navigation, none/slide/fade
        transitionSpeed: '400'
  });

  $("#j3-1").click(function(){
      $("#MPCA0").attr('hidden',true)
  });
  $("#j3-2").click(function(){
      $("#MPCA0").attr('hidden',false)
  });
  $("#j3-3").click(function(){
      $("#MPCA0").attr('hidden',true)
  });
  
  $("#n3-1").click(function(){
    $("#MPCA").attr('hidden',true)
   });
  $("#n3-2").click(function(){
    $("#MPCA").attr('hidden',false)
  });
  $("#n3-3").click(function(){
    $("#MPCA").attr('hidden',true)
  });
  
  $("#o3-1").click(function(){
    $("#MPCA2").attr('hidden',true)
   });
  $("#o3-2").click(function(){
    $("#MPCA2").attr('hidden',false)
  });
  $("#o3-3").click(function(){
    $("#MPCA2").attr('hidden',true)
  });
  
  $("#u3-1").click(function(){
    $("#MPCA3").attr('hidden',true)
   });
  $("#u3-2").click(function(){
    $("#MPCA3").attr('hidden',false)
  });
  $("#u3-3").click(function(){
    $("#MPCA3").attr('hidden',true)
  });  

  $("#w3-1").click(function(){
    $("#MPCA4").attr('hidden',true)
   });
  $("#w3-2").click(function(){
    $("#MPCA4").attr('hidden',false)
  });
  $("#w3-3").click(function(){
    $("#MPCA4").attr('hidden',true)
  });
  
  $("#ad3-1").click(function(){
    $("#MPCA5").attr('hidden',true)
   });
  $("#ad3-2").click(function(){
    $("#MPCA5").attr('hidden',false)
  });
  $("#ad3-3").click(function(){
    $("#MPCA5").attr('hidden',true)
  });

  $("#ap3-1").click(function(){
    $("#MPCA6").attr('hidden',true)
   });
  $("#ap3-2").click(function(){
    $("#MPCA6").attr('hidden',false)
  });
  $("#ap3-3").click(function(){
    $("#MPCA6").attr('hidden',true)
  });
  
  $("#as3-1").click(function(){
    $("#MPCA7").attr('hidden',true)
   });
  $("#as3-2").click(function(){
    $("#MPCA7").attr('hidden',false)
  });
  $("#as3-3").click(function(){
    $("#MPCA7").attr('hidden',true)
  });
  
  $("#ay3-1").click(function(){
    $("#MPCA8").attr('hidden',true)
   });
  $("#ay3-2").click(function(){
    $("#MPCA8").attr('hidden',false)
  });
  $("#ay3-3").click(function(){
    $("#MPCA8").attr('hidden',true)
  });
  
  $("#bb3-1").click(function(){
    $("#MPCA9").attr('hidden',true)
   });
  $("#bb3-2").click(function(){
    $("#MPCA9").attr('hidden',false)
  });
  $("#bb3-3").click(function(){
    $("#MPCA9").attr('hidden',true)
  });
  
  $("#bf3-1").click(function(){
    $("#MPCA10").attr('hidden',true)
   });
  $("#bf3-2").click(function(){
    $("#MPCA10").attr('hidden',false)
  });
  $("#bf3-3").click(function(){
    $("#MPCA10").attr('hidden',true)
  });
  
  $("#bi3-1").click(function(){
    $("#MPCA11").attr('hidden',true)
   });
  $("#bi3-2").click(function(){
    $("#MPCA11").attr('hidden',false)
  });
  $("#bi3-3").click(function(){
    $("#MPCA11").attr('hidden',true)
  });

  $("#bk3-1").click(function(){
    $("#MPCA12").attr('hidden',true)
   });
  $("#bk3-2").click(function(){
    $("#MPCA12").attr('hidden',false)
  });
  $("#bk3-3").click(function(){
    $("#MPCA12").attr('hidden',true)
  });
  
  $("#bw3-1").click(function(){
    $("#MPCA13").attr('hidden',true)
   });
  $("#bw3-2").click(function(){
    $("#MPCA13").attr('hidden',false)
  });
  $("#bw3-3").click(function(){
    $("#MPCA13").attr('hidden',true)
  });
  
  $("#ce3-1").click(function(){
    $("#MPCA14").attr('hidden',true)
   });
  $("#ce3-2").click(function(){
    $("#MPCA14").attr('hidden',false)
  });
  $("#ce3-3").click(function(){
    $("#MPCA14").attr('hidden',true)
  });
  
  $("#cj3-1").click(function(){
    $("#MPCA15").attr('hidden',true)
   });
  $("#cj3-2").click(function(){
    $("#MPCA15").attr('hidden',false)
  });
  $("#cj3-3").click(function(){
    $("#MPCA15").attr('hidden',true)
  });
  
  $("#ct3-1").click(function(){
    $("#MPCA16").attr('hidden',true)
   });
  $("#ct3-2").click(function(){
    $("#MPCA16").attr('hidden',false)
  });
  $("#ct3-3").click(function(){
    $("#MPCA16").attr('hidden',false)
  });
  $("#ct3-4").click(function(){
    $("#MPCA16").attr('hidden',false)
  });
  $("#ct3-5").click(function(){
    $("#MPCA16").attr('hidden',false)
  });
  
  $("#cz3-1").click(function(){
    $("#MPCA17").attr('hidden',true)
   });
  $("#cz3-2").click(function(){
    $("#MPCA17").attr('hidden',false)
  });
  $("#cz3-3").click(function(){
    $("#MPCA17").attr('hidden',true)
  });
  
  $("#do3-1").click(function(){
    $("#MPCA18").attr('hidden',true)
   });
  $("#do3-2").click(function(){
    $("#MPCA18").attr('hidden',false)
  });
  $("#do3-3").click(function(){
    $("#MPCA18").attr('hidden',true)
  });
}); 