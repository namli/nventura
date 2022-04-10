(function ($) {
  mapboxgl.accessToken = 'pk.eyJ1IjoibmFtbGkiLCJhIjoiY2tnM2k3YW94MGF3dzJxcW5uNHl5bjRkbyJ9.QYJaY-c7BegGsbWSG-Zaeg';

  var map = new mapboxgl.Map({
    container: 'front-map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [34.50, 28.487],
    bearing: -65, // bearing in degrees
    zoom: 14
  });

  map.scrollZoom.disable();
  map.addControl(new mapboxgl.NavigationControl(), "top-left");

  map.on('load', function () {
    const lang = (document.getElementsByTagName("html")[0].getAttribute("lang").substring(0, 2) === 'en') ? '' : '/ru';
    var estateApi = lang + "/wp-json/rest-for-property/v2/geo/";
    $.getJSON(estateApi, {
      format: "json"
    })
      .done(function (data) {
        console.log(data);
        $.each(data, function (i, item) {
          var el = document.createElement('div');
          var popup = new mapboxgl.Popup({ offset: 15, maxWidth: '18rem' }).setHTML(
            `<div class="card map-card border-0">
            <a href="${item.url}"><img src="${item.image}" class="card-img-top" alt="${item.title}"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="${item.url}">${item.title}</a></h5>
              <div class="price text-secondary">${item.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")} GBR</div>
              <ul class="addinfo d-flex p-0 m-0">
                <li>${item.type.name} | </li>
                <li>${item.zona.name}</li>
              </ul>
              <p class="card-text mt-2">${item.description.substring(0, 50) + "..."}</p >
            </div >
          </div > `
          );

          var marker = new mapboxgl.Marker(el)
            .setLngLat([item.geo.markers[0].lng, item.geo.markers[0].lat])
            .setPopup(popup)
            .addTo(map);


          // let marker = L.marker([item.geo.markers[0].lat, item.geo.markers[0].lng], {
          //   alt: item.title,
          //   title: item.title,
          //   icon: L.icon({
          //     iconUrl: '/app/themes/nventura/images/marker-icon-active.png',
          //     iconRetinaUrl: '/app/plugins/acf-openstreetmap-field/assets/css/images/marker-icon-2x.png',
          //     shadowUrl: '/app/plugins/acf-openstreetmap-field/assets/css/images/marker-shadow.png',
          //     iconSize: [25, 41],
          //     iconAnchor: [12, 41],
          //     popupAnchor: [1, -34],
          //     tooltipAnchor: [16, -28],
          //     shadowSize: [41, 41]
          //   })
          // })
          //   .bindPopup(`<div class="card map-card border-0" style="width: 18rem;">
          //   <a href="${item.url}"><img src="${item.image}" class="card-img-top" alt="${item.title}"></a>
          //   <div class="card-body">
          //     <h5 class="card-title"><a href="${item.url}">${item.title}</a></h5>
          //     <div class="price text-secondary">${item.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")} €</div>
          //     <ul class="addinfo d-flex p-0 m-0">
          //       <li>${item.type.name} | </li>
          //       <li>${item.action.name} | </li>
          //       <li>${item.zona.name}</li>
          //     </ul>
          //     <p class="card-text">${item.description.substring(0, 50) + "..."}</p >
          //   </div >
          // </div > `)
          //   .addEventListener('mouseover', (item) => {
          //     item.target.openPopup();
          //   })
          //   .addTo(map);


        });
      });




  });


  // var estateApi = "/wp-json/rest-for-property/v2/geo/";
  // $.getJSON(estateApi, {
  //   format: "json"
  // })
  //   .done(function (data) {
  //     $.each(data, function (i, item) {

  //       let marker = L.marker([item.geo.markers[0].lat, item.geo.markers[0].lng], {
  //         alt: item.title,
  //         title: item.title,
  //         icon: L.icon({
  //           iconUrl: '/app/themes/nventura/images/marker-icon-active.png',
  //           iconRetinaUrl: '/app/plugins/acf-openstreetmap-field/assets/css/images/marker-icon-2x.png',
  //           shadowUrl: '/app/plugins/acf-openstreetmap-field/assets/css/images/marker-shadow.png',
  //           iconSize: [25, 41],
  //           iconAnchor: [12, 41],
  //           popupAnchor: [1, -34],
  //           tooltipAnchor: [16, -28],
  //           shadowSize: [41, 41]
  //         })
  //       })
  //         .bindPopup(`<div class="card map-card border-0" style="width: 18rem;">
  //           <a href="${item.url}"><img src="${item.image}" class="card-img-top" alt="${item.title}"></a>
  //           <div class="card-body">
  //             <h5 class="card-title"><a href="${item.url}">${item.title}</a></h5>
  //             <div class="price text-secondary">${item.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")} €</div>
  //             <ul class="addinfo d-flex p-0 m-0">
  //               <li>${item.type.name} | </li>
  //               <li>${item.action.name} | </li>
  //               <li>${item.zona.name}</li>
  //             </ul>
  //             <p class="card-text">${item.description.substring(0, 50) + "..."}</p >
  //           </div >
  //         </div > `)
  //         .addEventListener('mouseover', (item) => {
  //           item.target.openPopup();
  //         })
  //         .addTo(map);


  //     });
  //   });

})(jQuery);