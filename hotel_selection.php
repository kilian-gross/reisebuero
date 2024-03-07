<!doctype html>
<html>
  <head>
    <title>Info Windows</title>
    <script>
      async function initMap() {
        const contentString = `
          <div>
            <h1>Post Ranch Inn</h1>
            <div>
              <p>
              Welcome to <b>Post Ranch Inn</b>, your Big Sur “home away from home.” Post Ranch Inn aims to make your visit as relaxing and enjoyable as possible, which is why so many guests continue to come back year after year.
              Given the close proximity to Seal Beach Scenic Overlook (2.7 mi), guests of Post Ranch Hotel can easily experience one of Big Sur's most popular landmarks.Rooms at Post Ranch Hotel provide air conditioning, a refrigerator, and 
              a minibar, and guests can stay connected with free wifi. In addition, while staying at Post Ranch Inn guests have access to a concierge and room service. You can also enjoy a pool and free breakfast. Need a place to park? 
              Free parking is available at Post Ranch Hotel. Travelers looking to enjoy some crab can head to Sierra Mar, The Sur House, or Deetjen's Big Sur Inn Restaurant.Looking to explore? Then look no further than Hawthorne Gallery (0.9 mi),
              which is a popular Big Sur attraction – and it is conveniently located within walking distance of the hotel. Post Ranch Inn puts the best of Big Sur at your fingertips, making your stay both relaxing and enjoyable.
              </p>
              <p>
                Hotel Homepage: 
                <a href="https://postranchinn.com/">
                https://postranchinn.com/
                </a>
                <img src="https://www.visitcalifornia.com/sites/visitcalifornia.com/files/VCA_PostRanchInn_Supplied_Kodiak_MG_4521_1280x640.jpg" alt="Post Ranch Inn" width="600" height="300">
              </p>
            </div>
          </div>`;
        const infoWindow = new google.maps.InfoWindow({
          content: contentString,
          ariaLabel: "Uluru",
        });

        const marker = document.querySelector('gmp-advanced-marker');
        marker.addEventListener('gmp-click', () => {
          infoWindow.open({anchor: marker});
        });
      }

      window.initMap = initMap;
    </script>
    <style>
      html,
      body {
        height: 600px;
        width: 85%;
        margin: 0;
      }
    </style>
  </head>
  <body>
    <?php include "components/header.html"?>
    <p>My Google Maps Demo</p>
    <gmp-map center="36.23026755198951, -121.77177424847743" zoom="4" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="36.23026755198951, -121.77177424847743" title="Uluru" gmp-clickable></gmp-advanced-marker>
    </gmp-map>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDWN6Ezi9fyn-tLfjbHb1mLivAk1xwbFc&callback=initMap&libraries=marker&v=beta&solution_channel=GMP_CCS_infowindows_v2"
      defer
    ></script>
  </body>
</html>
