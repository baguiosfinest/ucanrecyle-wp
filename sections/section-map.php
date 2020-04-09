<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

<section class="section section-map <?php echo ( empty(get_sub_field('full')) ) ? '':'section-full'; ?>">

    <div class="container">
        <?php get_template_part( 'sections/partials/section', 'title' ); ?>

        <div class="map-wrapper">
            <div class="sidebar">
                <header class='heading'>
                    <h3>Our locations</h3>
                </header>
                <div id="listings" class="listings"></div>
            </div>
            <div class="map" id="map">

            </div>
        </div>

        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoieW5ub3NzZW5jZSIsImEiOiJjazdnNXpyMHgwYTloM2twOXp2Yzh5NHJkIn0.wJRO693f2gCkmsW7wsK9Ug';

            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/light-v10',
                center: [152.9779416,-27.3202605],
                zoom: 14
            });


            var stores = {
                "type": "FeatureCollection",
                "features": [
                    {
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            152.9779416, -27.3202605
                        ]
                        },
                    "properties": {
                            "id": 1,
                            "placeName": "Brendale",
                            "address": "234 Leitchs Rd, Brendale QLD 4500",
                        }
                    },
                    {
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            152.674108,-25.5155545
                        ]
                        },
                    "properties": {
                            "id": 2,
                            "placeName": "Maryborough",
                            "address": "3 Kingston Dr, Maryborough West QLD 4650",
                        }
                    },
                    {
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [
                            152.8870186,-25.3079319
                        ]
                        },
                    "properties": {
                            "id": 3,
                            "placeName": "Hervey Bay",
                            "address": "1565-1569 Booral Rd, Urangan QLD 4655",
                        }
                    }
                ]
                };

            /**
             * Assign a unique id to each store. You'll use this `id`
             * later to associate each point on the map with a listing
             * in the sidebar.
             */
            stores.features.forEach(function(store, i){
                store.properties.id = i;
            });

            /**
             * Wait until the map loads to make changes to the map.
             */
            map.on('load', function (e) {
                /** 
                 * This is where your '.addLayer()' used to be, instead
                 * add only the source without styling a layer
                */
                map.addSource("places", {
                "type": "geojson",
                "data": stores
                });

                /**
                 * Add all the things to the page:
                 * - The location listings on the side of the page
                 * - The markers onto the map
                */
                buildLocationList(stores);
                addMarkers();
            });

            /**
             * Add a marker to the map for every store listing.
             **/
            function addMarkers() {
                /* For each feature in the GeoJSON object above: */
                stores.features.forEach(function(marker) {
                /* Create a div element for the marker. */
                var el = document.createElement('div');
                /* Assign a unique `id` to the marker. */
                el.id = "marker-" + marker.properties.id;
                /* Assign the `marker` class to each marker for styling. */
                el.className = 'marker';
                
                /**
                 * Create a marker using the div element
                 * defined above and add it to the map.
                 **/
                new mapboxgl.Marker(el, { offset: [0, -23] })
                    .setLngLat(marker.geometry.coordinates)
                    .addTo(map);

                /**
                 * Listen to the element and when it is clicked, do three things:
                 * 1. Fly to the point
                 * 2. Close all other popups and display popup for clicked store
                 * 3. Highlight listing in sidebar (and remove highlight for all other listings)
                 **/
                el.addEventListener('click', function(e){
                    /* Fly to the point */
                    flyToStore(marker);
                    /* Close all other popups and display popup for clicked store */
                    createPopUp(marker);
                    /* Highlight listing in sidebar */
                    var activeItem = document.getElementsByClassName('active-map');
                    e.stopPropagation();
                    if (activeItem[0]) {
                    activeItem[0].classList.remove('active-map');
                    }
                    var listing = document.getElementById('listing-' + marker.properties.id);
                    listing.classList.add('active-map');
                });
                });
            }

            /**
             * Add a listing for each store to the sidebar.
             **/
            function buildLocationList(data) {
                data.features.forEach(function(store, i){
                /**
                 * Create a shortcut for `store.properties`,
                 * which will be used several times below.
                 **/
                var prop = store.properties;

                /* Add a new listing section to the sidebar. */
                var listings = document.getElementById('listings');
                var listing = listings.appendChild(document.createElement('div'));
                /* Assign a unique `id` to the listing. */
                listing.id = "listing-" + prop.id;
                /* Assign the `item` class to each listing for styling. */
                listing.className = 'item';

                /* Add the link to the individual listing created above. */
                var link = listing.appendChild(document.createElement('a'));
                link.href = '#';
                link.className = 'title';
                link.id = "link-" + prop.id;
                link.innerHTML = prop.placeName;

                /* Add details to the individual listing. */
                var details = listing.appendChild(document.createElement('div'));
                details.innerHTML = prop.address;

                /**
                 * Listen to the element and when it is clicked, do four things:
                 * 1. Update the `currentFeature` to the store associated with the clicked link
                 * 2. Fly to the point
                 * 3. Close all other popups and display popup for clicked store
                 * 4. Highlight listing in sidebar (and remove highlight for all other listings)
                 **/
                link.addEventListener('click', function(e){
                    e.preventDefault();
                    
                    for (var i=0; i < data.features.length; i++) {
                    if (this.id === "link-" + data.features[i].properties.id) {
                        var clickedListing = data.features[i];
                        flyToStore(clickedListing);
                        createPopUp(clickedListing);
                    }
                    }
                    var activeItem = document.getElementsByClassName('active-map');
                    console.log(activeItem);
                    if (activeItem[0]) {
                        activeItem[0].classList.remove('active-map');
                    }
                    this.parentNode.classList.add('active-map');
                });
                });
            }

            /**
             * Use Mapbox GL JS's `flyTo` to move the camera smoothly
             * a given center point.
             **/
            function flyToStore(currentFeature) {
                map.flyTo({
                center: currentFeature.geometry.coordinates,
                zoom: 15
                });
            }

            /**
             * Create a Mapbox GL JS `Popup`.
             **/
            function createPopUp(currentFeature) {
                var popUps = document.getElementsByClassName('mapboxgl-popup');
                if (popUps[0]) popUps[0].remove();
                var popup = new mapboxgl.Popup({closeOnClick: false})
                .setLngLat(currentFeature.geometry.coordinates)
                .setHTML('<h4>' + currentFeature.properties.placeName + '</h4>' +
                    '<p>' + currentFeature.properties.address + '</p>')
                .addTo(map);
            }
        </script>
    </div>
</section>