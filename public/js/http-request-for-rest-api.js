
  jQuery(".grdnt-btn").on("click", function(e) { // When btn is pressed.
    // console.log(magicalData.siteURL);
          // e.preventDefault();
          var idTipo = jQuery(this).data('numero');
          var slug = jQuery(this).data('slug');
            // console.log(idTipo);
          // $(".grdnt-btn").removeClass("active");
        
          // $(".cont_query").hide();
  
          // $(".cont-post_" + catTipo ).fadeIn(400);
          
          // $(this).addClass("active");
          
          var ourRequest = new XMLHttpRequest(); 

            var magical = magicalData.siteURL;
          
              ourRequest.open('GET', magical+'/wp-json/wp/v2/posts?categories=' + idTipo + '&per_page=30');
              
              ourRequest.onload = function() {   
                    if (ourRequest.status >= 200 && ourRequest.status < 400) {  
            var data = JSON.parse(ourRequest.responseText);  
            
            var portfolioPostsContainer = document.getElementById("html_created");
            portfolioPostsContainer.innerHTML = createHTML(data);
           console.log(data);
           
          //  portfolioPostsBtn.remove();
                 } else {  
                    console.log("We connected to the server, but it returned an error.");       } 
                   };

                   

                   ourRequest.onerror = function() {
                  console.log("Connection error"); 
                    };
                  ourRequest.send();
                
  
    });

  
    function createHTML(postsData) {   
      var str = "Read Now";
      var authorID ="postsData[i].author"
     
      var ourHTMLString = '';   
      for (i = 0; i < postsData.length; i++) {   
        var categorySlug = postsData[i].category_link.slug; 
        var strTitle = postsData[i].title.rendered;
        // var test = postsData[i].author_meta.user_url;
        var authorName = postsData[i].author_meta.display_name
        var strEmpty = '<img src="'+postsData[i].fimg_url+'"/>';
        ourHTMLString += '<div class="col-sm-6 col-md-4 col-lg-4"><div class="content-cont">';
        ourHTMLString += '<div class="img-cont">' + strEmpty.link(postsData[i].link)+'</div>';
        ourHTMLString += '<div class="info-cont">';
        ourHTMLString += '<div class="date-author-cont">';
        ourHTMLString += '<div class="date-cont">';
        ourHTMLString += '<p>' + postsData[i].date_formatted + '</p></div>'; 
        ourHTMLString += '<div class="date-cont">'; 
        ourHTMLString += '<ul class="post-categories"><li>'; 
        ourHTMLString += '<a href="https://www.anexinet.com/blog/category/'+categorySlug+'">'+postsData[i].categories_names[0]+'</a></li></ul></div>'; 
        ourHTMLString +=  '</div>';  
        ourHTMLString +=  '<div class="title-cont"> <h4>' +strTitle.link(postsData[i].link)+'</h4></div>';  
        ourHTMLString += '<div class="btn-cont">'+str.link(postsData[i].link) + '</div>' + '</div>'+ '</div>'+ '</div>';
        
        
         }   
        
         return(ourHTMLString);
          
         }

        //  jQuery( ".img-cont" ).mouseenter(function() {
        //   var img = jQuery("img");
        //   jQuery( img ).animate({
        //     // opacity: 0.25,
        //     // left: "+=10",
        //     width: [ "200px" ]
        //     // height: [ "70%" ]
        //   }, 300, function() {
        //     // Animation complete.
        //   });
        // });

        // jQuery( ".img-cont" ).mouseleave(function() {
        //   var img = jQuery("img");
        //   jQuery( img ).animate({
        //     // opacity: 0.25,
        //     // left: "+=10",
        //     width: [ "150px" ]
        //     // height: [ "100%" ]
        //   }, 300, function() {
        //     // Animation complete.
        //   });
        // });





 