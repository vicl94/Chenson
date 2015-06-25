// JavaScript Document

        
      $(function(){
      
        $('#test1').gmap3({
          map:{
            options:{
              center:[23.2631773,-103.4276428],
              zoom: 5
            }
          },
          marker:{
            values:[
              {address:"Antonio Rosales 23 Reforma", data:"Chenson Gigantes", options:{icon: "http://www.1818.com.mx/prueba/img/Logo-map.png"} },
			  
             
			  {address:"Alvaro Obregon 204 A  San Juan de dios", data:"Chenson Obregon <br> Alvaro Obregon 204 A <br> Col.  San Juan de dios", options:{icon: "http://www.1818.com.mx/prueba/img/Logo-map.png"} }, 
			  
             {address:"González Gallo 1818 El Rosario 44898 Guadalajara, Jal", data:"Chenson CEDIS", options:{icon: "http://www.1818.com.mx/prueba/img/Logo-map.png"}}
            ],
            options:{
              draggable: false
            },
            events:{
              mouseover: function(marker, event, context){
                var map = $(this).gmap3("get"),
                  infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                  infowindow.open(map, marker);
                  infowindow.setContent(context.data);
                } else {
                  $(this).gmap3({
                    infowindow:{
                      anchor:marker, 
                      options:{content: context.data}
                    }
                  });
                }
              },
              mouseout: function(){
                var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                if (infowindow){
                  infowindow.close();
                }
              }
            }
          }
        });
      });
   