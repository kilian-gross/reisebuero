<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Hotel Selection</title> 
  <link rel="stylesheet" href="css/hotel_selection.css">
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyCDWN6Ezi9fyn-tLfjbHb1mLivAk1xwbFc" 
          type="text/javascript"></script>
</head> 
<body>
<?php include "components/header.html" ?>
  <main>
    <div id="map"></div>
    <form id="auswahlForm" action="room_selection.php" method="post">
      <label for="auswahl">Choose a destination:</label>
      <select name="auswahl" id="auswahl">
        <option value="Post Ranch Inn">Post Ranch Inn</option>
        <option value="Ithaafushi">Ithaafushi</option>
        <option value="Offshore Oil Rig">Offshore Oil Rig</option>
        <option value="Deception Station">Deception Station</option>
        <option value="Active War Zone">Active War Zone</option>
        <option value="Marina Bay Sands">Marina Bay Sands</option>
        <option value="The Plaza">The Plaza</option>
        <option value="Abandoned Gulag">Abandoned Gulag</option>
      </select>
      <input type="submit" id="submit" value="Choose">
    </form>

    <script>
      function setCookie(name, value, days) {
        var expires = "";
        if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
      }
      document.getElementById('auswahlForm').addEventListener('submit', function(event) {
        var auswahl = document.getElementById('auswahl').value;
        setCookie('auswahl', auswahl, 30);
      });
    </script>

      <script type="text/javascript">
        var locations = [
          ["<b>Post Ranch Inn:</b> Welcome to Post Ranch Inn, your Big Sur “home away from home.” Post Ranch Inn aims to make your visit as relaxing and enjoyable as possible, which is why so many guests continue to come back year after year. Given the close proximity to Seal Beach Scenic Overlook (4.3 km), guests of Post Ranch Hotel can easily experience one of Big Sur's most popular landmarks.Rooms at Post Ranch Hotel provide air conditioning, a refrigerator, and a minibar, and guests can stay connected with free wifi. In addition, while staying at Post Ranch Inn guests have access to a concierge and room service. You can also enjoy a pool and free breakfast. Need a place to park? Free parking is available at Post Ranch Hotel. Travelers looking to enjoy some crab can head to Sierra Mar, The Sur House, or Deetjen's Big Sur Inn Restaurant.Looking to explore? Then look no further than Hawthorne Gallery (1.4 km), which is a popular Big Sur attraction – and it is conveniently located within walking distance of the hotel. Post Ranch Inn puts the best of Big Sur at your fingertips, making your stay both relaxing and enjoyable.", 36.23026755198951, -121.77177424847743, "https://drupal8-prod.visitcalifornia.com/sites/drupal8-prod.visitcalifornia.com/files/VCA_PostRanchInn_Supplied_Kodiak_MG_4521_1280x640.jpg"],
          ["<b>Ithaafushi - The Private Island:</b> Just for a moment close your eyes and imagine your idea of a Maldives private island resort escape. What would you do with the whole island all to yourself? On Ithaafushi – The Private Island, you can do anything your heart desires! Dive into crystal-clear waters, indulge in world-class cuisine, and bask in the sheer luxury of unparalleled serenity. Then, explore, retreat, escape, and celebrate to your heart’s content. An extension of the iconic Waldorf Astoria Maldives Ithaafushi, it is as exclusive and luxurious as it gets, making it unparalleled anywhere in the world. The largest private island in the Maldives, Ithaafushi- Private Island stands as a testament to luxury and elegance, with every single aspect and detail meticulously designed to offer an unparalleled experience to its visitors. Accommodating 24 guests, spread across two elegant beach and overwater villas and one four-bedroom residence, our resort offers a range of luxurious options for your stay. Each boasting a refined, yet modern style accented with fine art, Maldivian charm and world-class facilities. Explore the island by bicycle, enjoy a wealth of marine activities, or take to the island's state-of-the-art gym under the watchful eye of your own trainer. Ithaafushi – The Private Island resort escape is your disappearing act into a world you may have imagined, but never realized could exist. Embark on your very own luxury private island escape where every moment is a testament to the extraordinary, and let your wildest dreams become your unforgettable reality.", 4.00898, 73.40364, "https://waldorfastoriamaldives.com/wp-content/uploads/2021/04/Ithaafushi_The_Private_Island_Maldives_Ithaafushi-1920x1024.jpg"],
          ["<b>Offshore Oil Rig:</b> Embark on an extraordinary offshore adventure! Stay overnight on our state-of-the-art oil rig and experience life on the high seas like never before. With comfortable accommodations mirroring those of our dedicated crew, you'll be immersed in the rhythm of offshore living. Wake up to stunning panoramic views of the ocean with a freshly produced oil spill and enjoy the simplicity of hearty meals prepared in our galley. Explore the rig's facilities and witness firsthand the intricacies of offshore operations. Whether you're seeking a unique getaway or a taste of maritime life which was killed by our accidental oil spill, our offshore oil rig offers an unforgettable experience. Book your stay now and set sail for an adventure of a lifetime!", -52.49933, -68.72449, "https://s1.reutersmedia.net/resources/r/?m=02&d=20160727&t=2&i=1147232826&w=976&fh=&fw=&ll=&pl=&sq=&r=LYNXNPEC6Q0I2"],
          ["<b>Deception Station:</b> Embark on an extraordinary Antarctic adventure! Stay overnight at Deception Station on Deception Island and immerse yourself in the unique experience of living amidst the icy wonderland. Our accommodations, akin to those of our scientific team, offer comfort and warmth against the Antarctic chill. Wake up to breathtaking views of glaciers and wildlife, savoring hearty meals in our communal dining area. Explore the station's research facilities and witness the marvels of Antarctic science. From guided excursions to breathtaking hikes, there's no shortage of exploration opportunities. Our knowledgeable staff ensures your safety and enriches your experience with insights into Antarctic ecology and research. Whether you're a thrill-seeker or a nature enthusiast, Deception Station promises an unforgettable journey into the heart of Antarctica's pristine wilderness. Book your stay now and discover the magic of Deception Island!", -62.975651277100106, -60.698564932284675, "https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Deception_island.jpg/1200px-Deception_island.jpg"],
          ["<b>Active War Zone: </b> Embark on an unparalleled journey into the heart of conflict! Visit an active war zone in Sudan's capital city and experience the raw intensity of the frontline. Our accommodations, simple yet secure, provide refuge amidst the chaos, offering a glimpse into the resilience of those living in conflict zones. Wake up to the sights and sounds of a city in turmoil, with opportunities to witness firsthand the daily struggles and triumphs of its inhabitants. Explore the war-torn streets, guided by locals who share their stories and perspectives. Our experienced team ensures your safety at every turn, providing insights into the complexities of conflict resolution and humanitarian efforts. Whether you seek understanding or advocacy, a visit to Sudan's capital promises an eye-opening experience unlike any other. Book your journey now and embark on a transformative exploration of resilience and hope amidst adversity.", 15.598594435785083, 32.508020743323776, "https://cdnuploads.aa.com.tr/uploads/Contents/2023/08/15/thumbs_b_c_305266540fd2d873c03e04abbb695544.jpg?v=165136"],
          ["<b>Marina Bay Sands:</b> Embark on an unparalleled journey into luxury at Marina Bay Sands in Singapore! Experience the epitome of opulence with our lavish accommodations overlooking the stunning city skyline. Wake up to panoramic views of the iconic Marina Bay and indulge in world-class amenities, from infinity pool relaxation to gourmet dining at our acclaimed restaurants. Explore the vibrant cityscape with ease, as our prime location offers access to Singapore's most prestigious landmarks and attractions. Our attentive staff caters to your every need, ensuring a seamless and unforgettable stay. Whether you're seeking relaxation or adventure, Marina Bay Sands promises an unparalleled escape into sophistication and style. Book your stay now and elevate your Singapore experience to new heights of luxury and indulgence!", 1.2837557428137467, 103.85910603939253, "https://www.visitsingapore.com/content/dam/desktop/global/see-do-singapore/recreation-leisure/marina-bay-sands-carousel01-rect.jpg"],
          ["<b>The Plaza:</b> Immerse yourself in the epitome of luxury at a Midtown Manhattan icon. Since 1907, The Plaza - A Fairmont Managed Hotel, has played host to illustrious guests and storied society affairs. Peerless rooms and suites merge timeless grandeur with thoughtful amenities. Indulge in the finest food and drink in legendary, opulent settings including The Palm Court and The Champagne Bar. Host a prestigious meeting, a lavish soiree or a wedding to remember forever in famous spaces like the glittering Grand Ballroom. At our 5-star New York hotel on 5th Avenue at Central Park South you are in the thick of Manhattan’s finest shopping. Nearby attractions include the Museum of Modern Art, Broadway, and Rockefeller Center, while Downtown sights are a short ride away.", 40.764631083290126, -73.97432618990373, "https://hips.hearstapps.com/hmg-prod/images/the-plaza-exterior-1-6500aeb96825a.jpg?crop=0.668xw:1.00xh;0.213xw,0&resize=640:*"],
          ["<b>Abandoned Gulag:</b> Embark on an unparalleled journey into the depths of history at the Gulag correctional labor camp in Krasnoyarsk Krai! Experience the stark reality of a bygone era as you immerse yourself in the preserved remnants of this infamous Soviet penal system. Our accommodations, reminiscent of the harsh conditions endured by prisoners, offer a sobering glimpse into the past. Wake up to the solemn silence of the Siberian wilderness, surrounded by remnants of barbed wire fences and guard towers. Explore the camp's historical artifacts and exhibits, shedding light on the struggles faced by those imprisoned here. Our knowledgeable guides provide insight into the dark chapters of Soviet history, offering a unique opportunity for reflection and remembrance. Whether you seek understanding or contemplation, a visit to the Gulag camp promises an unforgettable journey into the depths of human resilience and perseverance. Book your visit now and embark on a transformative exploration of history and memory.", 69.40530156824788, 87.64918903269229, "https://static.themoscowtimes.com/image/article_1360/d3/cd0a33fb71fa4b8098b780587ed732cb.jpg"],
        ]
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 1.5,
          center: new google.maps.LatLng(13.94934, -38.36654),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        
        var infowindow = new google.maps.InfoWindow();

        var marker, i;
        
        for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          var content = '<div>' + locations[i][0] + '</div>'; 

          
          if (locations[i][3]) {
            content += '<div><img src="' + locations[i][3] + '" alt="Location Image" style="max-width: 100%;"></div>'; // Image
          }

          infowindow.setContent(content);

          
          infowindow.open(map, marker);

          
          google.maps.event.addListener(infowindow, 'domready', function() {
            
            var contentWrapper = document.querySelector('.gm-style-iw');

          
            var maxWidth = 440; 
            var maxHeight = 500; 
            
            var contentWidth = contentWrapper.offsetWidth;
            var contentHeight = contentWrapper.offsetHeight;

            var newWidth = Math.min(contentWidth, maxWidth);
            var newHeight = Math.min(contentHeight, maxHeight);

            contentWrapper.style.width = newWidth + 'px';
            contentWrapper.style.height = newHeight + 'px';

            infowindow.setPosition(marker.getPosition());
          });
        }
      })(marker, i));
    }
    </script>
  </main>
  <?php include "components/footer.html" ?>
</body>
</html>