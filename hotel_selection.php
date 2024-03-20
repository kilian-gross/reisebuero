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
      <label for="auswahl">Wähle eine Option:</label>
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
      <input type="submit" id="submit" value="Auswählen">
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
          ["<b>Post Ranch Inn:</b> Willkommen im Post Ranch Inn, Ihrem 'Zuhause fern von Zuhause' in Big Sur. Das Post Ranch Inn ist bestrebt, Ihren Besuch so entspannend und angenehm wie möglich zu gestalten, weshalb so viele Gäste Jahr für Jahr wiederkommen. Dank der Nähe zum Seal Beach Scenic Overlook (4,3 km) können die Gäste des Post Ranch Hotels eine der beliebtesten Sehenswürdigkeiten von Big Sur ganz einfach erleben. Die Zimmer im Post Ranch Hotel sind mit Klimaanlage, Kühlschrank und Minibar ausgestattet, und die Gäste können mit kostenlosem WLAN in Verbindung bleiben. Darüber hinaus haben die Gäste des Post Ranch Inn Zugang zu einem Concierge und Zimmerservice. Sie können auch einen Pool und ein kostenloses Frühstück geniessen. Benötigen Sie einen Platz zum Parken? Am Post Ranch Hotel stehen kostenlose Parkplätze zur Verfügung. Reisende, die ein paar Krabben essen möchten, können ins Sierra Mar, The Sur House oder Deetjen's Big Sur Inn Restaurant gehen. Möchten Sie etwas entdecken? Dann sollten Sie die Hawthorne Gallery (1,4 km) besuchen, eine beliebte Attraktion in Big Sur, die bequem zu Fuss vom Hotel aus zu erreichen ist. Mit dem Post Ranch Inn haben Sie das Beste von Big Sur zum Greifen nah und können Ihren Aufenthalt entspannt und angenehm gestalten.", 36.23026755198951, -121.77177424847743, "https://drupal8-prod.visitcalifornia.com/sites/drupal8-prod.visitcalifornia.com/files/VCA_PostRanchInn_Supplied_Kodiak_MG_4521_1280x640.jpg"],
          ["<b>Ithaafushi - The Private Island:</b> Schliessen Sie für einen Moment die Augen und stellen Sie sich vor, wie Sie sich einen privaten Inselurlaub auf den Malediven vorstellen. Was würden Sie tun, wenn Sie die ganze Insel ganz für sich allein hätten? Auf Ithaafushi - The Private Island - können Sie alles tun, was Ihr Herz begehrt! Tauchen Sie in kristallklarem Wasser, lassen Sie sich von der Weltklasse-Küche verwöhnen und genießen Sie den puren Luxus einer unvergleichlichen Gelassenheit. Dann können Sie erkunden, sich zurückziehen, fliehen und nach Herzenslust feiern. Als Erweiterung des kultigen Waldorf Astoria Maldives Ithaafushi ist es so exklusiv und luxuriös, wie es nur sein kann, und damit einzigartig auf der Welt. Die grösste Privatinsel der Malediven, Ithaafushi- Private Island, ist ein Beweis für Luxus und Eleganz. Jeder einzelne Aspekt und jedes Detail wurde sorgfältig entworfen, um den Besuchern ein unvergleichliches Erlebnis zu bieten. Mit 24 Unterkünften, verteilt auf zwei elegante Strand- und Überwasservillen und eine Vier-Schlafzimmer-Residenz, bietet unser Resort eine Reihe von luxuriösen Optionen für Ihren Aufenthalt. Jede von ihnen ist in einem raffinierten, modernen Stil gehalten, der durch Kunst, maledivischen Charme und erstklassige Einrichtungen unterstrichen wird. Erkunden Sie die Insel mit dem Fahrrad, geniessen Sie eine Fülle von Wassersportaktivitäten oder nutzen Sie das hochmoderne Fitnessstudio der Insel unter den wachsamen Augen Ihres eigenen Trainers. Ithaafushi - The Private Island Resort Escape ist Ihr Abtauchen in eine Welt, die Sie sich vielleicht vorgestellt haben, von der Sie aber nie wussten, dass es sie gibt. Begeben Sie sich auf Ihre ganz eigene, luxuriöse, private Inselflucht, wo jeder Moment ein Zeugnis des Außergewöhnlichen ist, und lassen Sie Ihre wildesten Träume zu Ihrer unvergesslichen Realität werden.", 4.00898, 73.40364, "https://waldorfastoriamaldives.com/wp-content/uploads/2021/04/Ithaafushi_The_Private_Island_Maldives_Ithaafushi-1920x1024.jpg"],
          ["<b>Offshore Oil Rig:</b> Begeben Sie sich auf ein aussergewöhnliches Offshore-Abenteuer! Übernachten Sie auf unserer hochmodernen Ölplattform und erleben Sie das Leben auf hoher See wie nie zuvor. Mit komfortablen Unterkünften, die denen unserer engagierten Crew entsprechen, tauchen Sie in den Rhythmus des Lebens auf See ein. Wachen Sie mit einem atemberaubenden Panoramablick und einem frisch produzierten Ölteppich auf und geniessen Sie die Einfachheit der in unserer Kombüse zubereiteten herzhaften Mahlzeiten. Erkunden Sie die Einrichtungen der Bohrinsel und erleben Sie die Feinheiten des Offshore-Betriebs aus erster Hand. Ganz gleich, ob Sie einen einzigartigen Urlaub oder einen Einblick in das maritime Leben suchen, welches durch die zuvor entstandenen Ölteppiche vollkommen zerstört wurde, unsere Bohrinsel bietet Ihnen ein unvergessliches Erlebnis. Buchen Sie jetzt Ihren Aufenthalt und stechen Sie in See für das Abenteuer Ihres Lebens!", -52.49933, -68.72449, "https://s1.reutersmedia.net/resources/r/?m=02&d=20160727&t=2&i=1147232826&w=976&fh=&fw=&ll=&pl=&sq=&r=LYNXNPEC6Q0I2"],
          ["<b>Deception Station:</b> Begeben Sie sich auf ein aussergewöhnliches antarktisches Abenteuer! Übernachten Sie in der Deception Station auf Deception Island und tauchen Sie ein in die einzigartige Erfahrung des Lebens inmitten des eisigen Wunderlandes. Unsere Unterkünfte, die denen unseres wissenschaftlichen Teams ähneln, bieten Komfort und Wärme gegen die antarktische Kälte. Wachen Sie mit einem atemberaubenden Blick auf Gletscher und Wildtiere auf und geniessen Sie herzhafte Mahlzeiten in unserem gemeinsamen Essbereich. Erkunden Sie die Forschungseinrichtungen der Station und erleben Sie die Wunder der antarktischen Wissenschaft. Von geführten Exkursionen bis hin zu atemberaubenden Wanderungen - an Erkundungsmöglichkeiten mangelt es nicht. Unser sachkundiges Personal sorgt für Ihre Sicherheit und bereichert Ihr Erlebnis mit Einblicken in die antarktische Ökologie und Forschung. Ob Sie nun auf der Suche nach Nervenkitzel sind oder sich für die Natur begeistern, Deception Station verspricht eine unvergessliche Reise in das Herz der unberührten Wildnis der Antarktis. Buchen Sie jetzt Ihren Aufenthalt und entdecken Sie den Zauber von Deception Island!", -62.975651277100106, -60.698564932284675, "https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Deception_island.jpg/1200px-Deception_island.jpg"],
          ["<b>Active War Zone: </b> Begeben Sie sich auf eine unvergleichliche Reise in das Herz des Konflikts! Besuchen Sie ein aktives Kriegsgebiet in der sudanesischen Hauptstadt und erleben Sie die rohe Intensität der Frontlinie. Unsere einfachen, aber sicheren Unterkünfte bieten einen Zufluchtsort inmitten des Chaos und geben einen Einblick in die Widerstandsfähigkeit der Menschen, die in Konfliktgebieten leben. Wachen Sie auf und erleben Sie die Sehenswürdigkeiten und Geräusche einer Stadt in Aufruhr, und werden Sie Zeuge der täglichen Kämpfe und Triumphe ihrer Bewohner. Erkunden Sie die vom Krieg zerrütteten Strassen und lassen Sie sich von Einheimischen führen, die ihre Geschichten und Perspektiven erzählen. Unser erfahrenes Team sorgt auf Schritt und Tritt für Ihre Sicherheit und gewährt Ihnen Einblicke in die komplexen Zusammenhänge von Konfliktlösung und humanitären Bemühungen. Ganz gleich, ob Sie Verständnis oder Fürsprache suchen, ein Besuch in der sudanesischen Hauptstadt verspricht eine augenöffnende Erfahrung, die ihresgleichen sucht. Buchen Sie Ihre Reise jetzt und begeben Sie sich auf eine transformative Entdeckungsreise zu Resilienz und Hoffnung inmitten von Widrigkeiten.", 15.598594435785083, 32.508020743323776, "https://cdnuploads.aa.com.tr/uploads/Contents/2023/08/15/thumbs_b_c_305266540fd2d873c03e04abbb695544.jpg?v=165136"],
          ["<b>Marina Bay Sands:</b> Begeben Sie sich auf eine unvergleichliche Reise in den Luxus im Marina Bay Sands in Singapur! Erleben Sie den Inbegriff von Opulenz in unseren grosszügigen Unterkünften mit Blick auf die atemberaubende Skyline der Stadt. Wachen Sie mit einem Panoramablick auf die ikonische Marina Bay auf und geniessen Sie die Annehmlichkeiten der Weltklasse, von der Entspannung im Infinity-Pool bis hin zum Gourmet-Essen in unseren renommierten Restaurants. Erkunden Sie das pulsierende Stadtbild mit Leichtigkeit, denn von unserer erstklassigen Lage aus erreichen Sie die bedeutendsten Sehenswürdigkeiten und Attraktionen Singapurs. Unser aufmerksames Personal kümmert sich um alle Ihre Bedürfnisse und sorgt für einen reibungslosen und unvergesslichen Aufenthalt. Ganz gleich, ob Sie Entspannung oder Abenteuer suchen, Marina Bay Sands verspricht Ihnen einen unvergleichlichen Aufenthalt mit Raffinesse und Stil. Buchen Sie jetzt Ihren Aufenthalt und erleben Sie Singapur in einer neuen Dimension des Luxus und des Genusses!", 1.2837557428137467, 103.85910603939253, "https://www.visitsingapore.com/content/dam/desktop/global/see-do-singapore/recreation-leisure/marina-bay-sands-carousel01-rect.jpg"],
          ["<b>The Plaza:</b> Tauchen Sie ein in den Inbegriff von Luxus in einer Ikone von Midtown Manhattan. Seit 1907 beherbergt das The Plaza - A Fairmont Managed Hotel illustre Gäste und berühmte Persönlichkeiten. Die unvergleichlichen Zimmer und Suiten vereinen zeitlose Pracht mit durchdachten Annehmlichkeiten. Geniessen Sie die feinsten Speisen und Getränke in legendären, opulenten Räumlichkeiten wie dem Palm Court und der Champagne Bar. Veranstalten Sie ein prestigeträchtiges Meeting, eine üppige Soiree oder eine unvergessliche Hochzeit in berühmten Räumen wie dem glitzernden Grand Ballroom. In unserem 5-Sterne-Hotel in New York an der 5th Avenue am Central Park South befinden Sie sich inmitten der besten Einkaufsmöglichkeiten Manhattans. Zu den nahe gelegenen Attraktionen gehören das Museum of Modern Art, der Broadway und das Rockefeller Center, während die Sehenswürdigkeiten der Innenstadt nur eine kurze Fahrt entfernt sind.", 40.764631083290126, -73.97432618990373, "https://hips.hearstapps.com/hmg-prod/images/the-plaza-exterior-1-6500aeb96825a.jpg?crop=0.668xw:1.00xh;0.213xw,0&resize=640:*"],
          ["<b>Abandoned Gulag:</b> Begeben Sie sich im Arbeitslager Gulag in der Region Krasnojarsk auf eine unvergleichliche Reise in die Tiefen der Geschichte! Erleben Sie die nackte Realität einer vergangenen Ära, während Sie in die erhaltenen Überreste des berüchtigten sowjetischen Strafvollzugs eintauchen. Unsere Unterkünfte, die an die harten Bedingungen erinnern, unter denen die Gefangenen lebten, bieten einen ernüchternden Einblick in die Vergangenheit. Wachen Sie in der feierlichen Stille der sibirischen Wildnis auf, umgeben von den Überresten der Stacheldrahtzäune und Wachtürme. Erkunden Sie die historischen Artefakte und Exponate des Lagers, die Aufschluss über die Kämpfe der hier Inhaftierten geben. Unsere sachkundigen Führer geben Einblick in die dunklen Kapitel der sowjetischen Geschichte und bieten eine einzigartige Gelegenheit zum Nachdenken und Erinnern. Ganz gleich, ob Sie Verständnis oder Kontemplation suchen, ein Besuch des Gulag-Lagers verspricht eine unvergessliche Reise in die Tiefen menschlicher Widerstandsfähigkeit und Beharrlichkeit. Buchen Sie jetzt Ihren Besuch und begeben Sie sich auf eine transformative Erkundung von Geschichte und Erinnerung.", 69.40530156824788, 87.64918903269229, "https://static.themoscowtimes.com/image/article_1360/d3/cd0a33fb71fa4b8098b780587ed732cb.jpg"],
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