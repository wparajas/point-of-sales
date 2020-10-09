// ARJAY INPUT VALIDATION
$(document).ready(function() {
			 
    // --> [A-Z][a-z][\s][0] <-- //
    $(document).on("keypress", ".alphabetspacezero", function(e){
         var keyCode = e.which;
         
         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 32 && keyCode != 48) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9] <-- //
     $(document).on("keypress", ".alphanumeric", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][-] <-- //
     $(document).on("keypress", ".alphanumericdash", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 45) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][_] <-- //
     $(document).on("keypress", ".alphanumericunderscore", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 95) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][/] <-- //
     $(document).on("keypress", ".alphanumericdashcommaslash", function(e){
         var keyCode = e.which;
         
         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 45 && keyCode != 47) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][-][\s] <-- //
     $(document).on("keypress", ".alphanumericdashspace", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 45 && keyCode != 32) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][_][\s] <-- //
     $(document).on("keypress", ".alphanumericunderscorespace", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 95 && keyCode != 32) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][-][,][\s] <-- //
     $(document).on("keypress", ".alphanumericdashcommaspace", function(e){
         var keyCode = e.which;
         
         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 45 && keyCode != 44 && keyCode != 32) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][-][,][\s] <-- //
     $(document).on("keypress", ".alphanumericdashspacecomma", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 45 && keyCode != 32 && keyCode != 44) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][.][@][_] <-- //
     $(document).on("keypress", ".alphanumericdotatunderscore", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 46 && keyCode != 64 && keyCode != 95) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][.][/][:][_] <-- //
     $(document).on("keypress", ".alphanumericdotslashcolonunderscore", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 46 && keyCode != 47 && keyCode != 58 && keyCode != 95) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][-][_][\s][(][)] <-- //
     $(document).on("keypress", ".alphanumericdashunderscorespaceparenthesis", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 45 && keyCode != 95 && keyCode != 32 && keyCode != 40 && keyCode != 41) {
         e.preventDefault();
         }
     });

     // --> [A-Z][a-z][0-9][-][_][\s] <-- //
     $(document).on("keypress", ".alphanumericdashunderscorespace", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13 && keyCode != 45 && keyCode != 95 && keyCode != 32) {
         e.preventDefault();
         }
     });

    // --> CONTACT NUMBER STARTS WITH 09
     $(document).on("keypress", ".contactnumber", function(e){
         var keyCode = e.which;
         if ( !( (keyCode >= 48 && keyCode <= 57) ) && keyCode != 8 && keyCode != 13) {
         e.preventDefault();
         } else {
            let val = this.value;
            if (val.length < 2) {
                $(this).val("09");
            }
            if (val.length == 4) {
                $(this).val(val+"-");
            }
            if (val.length == 8) {
                $(this).val(val+"-");
            }
         }
     }); 

    // -- > TIN NUMBER
     $(document).on("keypress", ".tinnumber", function(e){
         var keyCode = e.which;
         if ((keyCode >= 48 && keyCode <= 57)) {
             let val = this.value;
             if (val.length == 3) {
                 $(this).val(val+"-");
             }
             if (val.length == 7) {
                 $(this).val(val+"-");
             }
             if (val.length == 11) {
                 $(this).val(val+"-");
             }
         } else {
             e.preventDefault();
         }
         
     }); 

     // --> [0-9][.]
     $(document).on("keypress", ".numberdot", function(e){
         var keyCode = e.which;
         if ( !( (keyCode >= 48 && keyCode <= 57) ) && keyCode != 8 && keyCode != 13 && keyCode != 46) {
         e.preventDefault();
         }
     }); 

     $(document).on("keypress", ".numbersonly", function(e){
         var keyCode = e.which;
         if ( !( (keyCode >= 48 && keyCode <= 57) ) && keyCode != 8 && keyCode != 13) {
         e.preventDefault();
         }
     }); 

     // HIDE THE FUTURE DATES
     $(function(){
         var dtToday = new Date();

         var month = dtToday.getMonth() + 1;
         var day = dtToday.getDate();
         var year = dtToday.getFullYear();

         if(month < 10)
             month = '0' + month.toString();
         if(day < 10)
             day = '0' + day.toString();

         var maxDate = year + '-' + month + '-' + day;    
         $('.date-validate').attr('max', maxDate);
     });
     
     $(document).on("keypress", ".restrictspecchar", function(e){
         var keyCode = e.which;

         if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 45 && keyCode != 39 && keyCode != 8 && keyCode != 32 && keyCode != 13) {
         e.preventDefault();
         }
     });	

});