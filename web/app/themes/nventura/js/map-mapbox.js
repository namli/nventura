(function ($) {
  mapboxgl.accessToken = 'pk.eyJ1IjoibmFtbGkiLCJhIjoiY2tnM2k3YW94MGF3dzJxcW5uNHl5bjRkbyJ9.QYJaY-c7BegGsbWSG-Zaeg';

  var map = new mapboxgl.Map({
    container: 'map-box',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [34.50, 28.487],
    bearing: -65, // bearing in degrees
    zoom: 13
  });

  map.scrollZoom.disable();
  map.addControl(new mapboxgl.NavigationControl(), "top-left");

  const bodyClasses = $('body')[0].classList;
  let currentPostId;
  bodyClasses.forEach((item) => {
    if (item.startsWith("postid-")) {
      currentPostId = item.substring(7);
    }
  });

  map.on('load', function () {
    const lang = (document.getElementsByTagName("html")[0].getAttribute("lang").substring(0, 2) === 'en') ? '' : '/ru';
    var estateApi = lang + "/wp-json/rest-for-property/v2/geo/";
    $.getJSON(estateApi, {
      format: "json"
    })
      .done(function (data) {
        $.each(data, function (i, item) {
          var el = document.createElement('div');
          if (currentPostId == item.id) {
            el.classList.add('current');
          }
          var popup = new mapboxgl.Popup({ offset: 15, maxWidth: '18rem' }).setHTML(
            `<div class="card map-card border-0">
            <a href="${item.url}"><img src="${item.image}" class="card-img-top" alt="${item.title}"></a>
            <div class="card-body">
              <h5 class="card-title"><a href="${item.url}">${item.title}</a></h5>
              <div class="price text-secondary">${item.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")} €</div>
              <ul class="addinfo d-flex p-0 m-0">
                <li>${item.action.name} | </li>
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


        });
      });




  });

})(jQuery);