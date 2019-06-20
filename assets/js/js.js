$( document ).ready(function() {

  $('.primator').slick({
  prevArrow: '<button class="slick-arrow slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.png"></button>',
  nextArrow: '<button class ="slick-arrow slick-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"></button>',
  appendArrows: $('.your-class-arrow'),

  });

  $('.primator-mob').slick({
  prevArrow: '<button class="slick-arrow slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.png"></button>',
  nextArrow: '<button class ="slick-arrow slick-next"><img src="img/mob-arr1.svg"></button>',
  appendArrows: $('.arrow-primator-mob'),
  });







  $('.news-slider-in').slick({
    prevArrow: '<button class="slick-arrow slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.png"></button>',
  nextArrow: '<button class ="slick-arrow slick-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mob-arr1.svg"></button>',
  appendArrows: $('.your-class-arrow2'),

  }); 

  $(".news-slider-in").on('afterChange', function(event, slick, currentSlide){
      $("#cp").text(currentSlide + 1);
      $('#cp-mob').text(currentSlide + 1);
    });





  $('.tablet-slider-second-content').slick({
    prevArrow: '<button class="slick-arrow slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.png"></button>',
  nextArrow: '<button class ="slick-arrow slick-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"></button>',
  appendArrows: $('.your-class-arrow3'),

  });

  $('.mobile-slider-second-content').slick({
  prevArrow: '<button class="slick-arrow slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.png"></button>',
  nextArrow: '<button class ="slick-arrow slick-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mob-arr1.svg"></button>',
  appendArrows: $('.prev'),

  });




  function func(){
    let c = 0;
    let a = document.getElementById('rez1');
    let b = document.getElementById('ones');
    if(a.value.length > c ){
      b.style.display = "block";
    }
    else{
      b.style.display = "none";

    }

  }
  function func2(){
    let c = 0;
    let a = document.getElementById('rez2');
    let b = document.getElementById('towes');
    if(a.value.length > c ){
      b.style.display = "block";
    }
    else{
      b.style.display = "none";

    }
    
  }
  function func3(){
    let c = 0;
    let a = document.getElementById('rez3');
    let b = document.getElementById('threes');
  if(a.value.length > c ){
      b.style.display = "block";
    }
    else{
      b.style.display = "none";

    }
    
  }
  function func4(){
    let c = 0;
    let a = document.getElementById('rez4');
    let b = document.getElementById('fores');
  if(a.value.length > c ){
      b.style.display = "block";
    }
    else{
      b.style.display = "none";

    }
    
  }




  function initialize() {
      var latlng = new google.maps.LatLng(47.845752,35.124863);
      var latlng2 = new google.maps.LatLng(47.845752,35.124863);
      var myOptions = {
          zoom: 17,
          center: latlng,
          styles: [
    {
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#212121"
        }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#212121"
        }
      ]
    },
    {
      "featureType": "administrative",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "administrative.country",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "administrative.locality",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#bdbdbd"
        }
      ]
    },
    {
      "featureType": "landscape.man_made",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "lightness": 100
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#181818"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#1b1b1b"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [
        {
          "color": "#2c2c2c"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#8a8a8a"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#373737"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "geometry.fill",
      "stylers": [
        {
          "lightness": 10
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "lightness": 90
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "lightness": 55
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "lightness": 90
        }
      ]
    },
    {
      "featureType": "road.highway.controlled_access",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#4e4e4e"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        },
        {
          "lightness": 70
        }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#000000"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#3d3d3d"
        }
      ]
    }
  ]


      };

      var myOptions2 =  {
          zoom: 17,
          center: latlng2,
          styles: [
    {
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#212121"
        }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#212121"
        }
      ]
    },
    {
      "featureType": "administrative",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "administrative.country",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "administrative.locality",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#bdbdbd"
        }
      ]
    },
    {
      "featureType": "landscape.man_made",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "lightness": 100
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#181818"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#1b1b1b"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [
        {
          "color": "#2c2c2c"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#8a8a8a"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#373737"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "geometry.fill",
      "stylers": [
        {
          "lightness": 10
        },
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "lightness": 90
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "lightness": 55
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "lightness": 90
        }
      ]
    },
    {
      "featureType": "road.highway.controlled_access",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#4e4e4e"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        },
        {
          "lightness": 70
        }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#000000"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#3d3d3d"
        }
      ]
    }
  ]


      };

      var map = new google.maps.Map(document.getElementById("map"), myOptions);
      
      var map2 = new google.maps.Map(document.getElementById("map2"), myOptions2);

      var myMarker = new google.maps.Marker(
      {
          position: latlng,
          map: map,
          icon: src = './wp-content/themes/m2collab/assets/img/index-ja.png',
        animation: google.maps.Animation.BOUNCE
    });

      var myMarker2 = new google.maps.Marker(
      {
          position: latlng2,
          map: map2,
          icon: src = './wp-content/themes/m2collab/assets/img/index-ja.png',
          animation: google.maps.Animation.BOUNCE
      });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
});