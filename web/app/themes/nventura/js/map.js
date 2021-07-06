
(function ($) {
  $(document).on('acf-osm-map-create-markers', function (e) {
    // Map and marker data is stored in e.detail
    const map = e.detail.map;
    const mapData = e.detail.mapData;
    mapData.mapMarkers = '';

    const bodyClasses = $('body')[0].classList;
    let currentPostId;
    bodyClasses.forEach((item) => {
      if (item.startsWith("postid-")) {
        currentPostId = item.substring(7);
      }
    });


    var estateApi = "/wp-json/rest-for-property/v2/geo/";
    $.getJSON(estateApi, {
      format: "json"
    })
      .done(function (data) {
        $.each(data, function (i, item) {






          if (currentPostId == item.id) {
            let marker = L.marker([item.geo.markers[0].lat, item.geo.markers[0].lng], {
              alt: item.title,
              title: item.title,
              icon: L.icon({
                iconUrl: '/app/themes/nventura/images/marker-icon-active.png',
                iconRetinaUrl: '/app/plugins/acf-openstreetmap-field/assets/css/images/marker-icon-2x.png',
                shadowUrl: '/app/plugins/acf-openstreetmap-field/assets/css/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                tooltipAnchor: [16, -28],
                shadowSize: [41, 41]
              })
            })
              .bindPopup(`<div class="card map-card border-0" style="width: 18rem;">
              <a href="${item.url}"><img src="${item.image}" class="card-img-top" alt="${item.title}"></a>
              <div class="card-body">
                <h5 class="card-title"><a href="${item.url}">${item.title}</a></h5>
                <div class="price text-secondary">${item.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")} €</div>
                <ul class="addinfo d-flex p-0 m-0">
                  <li>${item.type.name} | </li>
                  <li>${item.action.name} | </li>
                  <li>${item.zona.name}</li>
                </ul>
                <p class="card-text">${item.description.substring(0, 50) + "..."}</p >
              </div >
            </div > `)
              .addEventListener('mouseover', (item) => {
                item.target.openPopup();
              })
              .addTo(map);
          } else {
            let marker = L.marker([item.geo.markers[0].lat, item.geo.markers[0].lng], {
              alt: item.title,
              title: item.title,
            })
              .bindPopup(`<div class="card map-card border-0" style="width: 18rem;">
              <a href="${item.url}"><img src="${item.image}" class="card-img-top" alt="${item.title}"></a>
              <div class="card-body">
                <h5 class="card-title"><a href="${item.url}">${item.title}</a></h5>
                <div class="price text-secondary">${item.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")} €</div>
                <ul class="addinfo d-flex p-0 m-0">
                  <li>${item.type.name} | </li>
                  <li>${item.action.name} | </li>
                  <li>${item.zona.name}</li>
                </ul>
                <p class="card-text">${item.description.substring(0, 50) + "..."}</p >
              </div >
            </div > `)
              .addEventListener('mouseover', (item) => {
                item.target.openPopup();
              })
              .addTo(map);
          }
        });
      });

  });
  $(document).on('acf-osm-map-created', function (e) {
    const map = e.detail.map;

    const polygon = L.polygon([
      [28.478759175842832, 34.48995744375053],
      [28.48075844029152, 34.489249340570595],
      [28.48043780608841, 34.490515343225624],
      [28.480664136215182, 34.49233924535575],
      [28.481041352015275, 34.49356233266654],
      [28.481927803842012, 34.49478541997733],
      [28.482701085529115, 34.495987049616005],
      [28.482663364602583, 34.496759525812294],
      [28.482455899265755, 34.4981113591558],
      [28.482229572978955, 34.49965631154838],
      [28.482172991331467, 34.501265636957314],
      [28.48277652734176, 34.50137292531791],
      [28.48285196910052, 34.502703300989296],
      [28.482981542748238, 34.50448150118215],
      [28.48449036475377, 34.50662726839406],
      [28.485584247226654, 34.50847262819631],
      [28.485999165200216, 34.50967425783498],
      [28.485131607577816, 34.51263541658742],
      [28.48430176318208, 34.515296167930195],
      [28.48368941806866, 34.51460485465261],
      [28.48211959396937, 34.514302113358056],
      [28.48173074720858, 34.51367867392414],
      [28.47942390735769, 34.513023631453315],
      [28.470439850273294, 34.507690816460475],
      [28.472078034074208, 34.505573245235986],
      [28.471829969198026, 34.50268319781525],
      [28.472993723754087, 34.49904887018561],
      [28.47464216822444, 34.497960024496635],
      [28.473207940692628, 34.50075657086899],
      [28.47350902126663, 34.5026089796681],
      [28.473733939289918, 34.50528382900457],
      [28.47448556516295, 34.505827009122854],
      [28.476215140525895, 34.507256692113366],
      [28.478014425209036, 34.50668283055529],
      [28.47766698332028, 34.503357416061284],
      [28.476821204142333, 34.50159893631643],
      [28.478147472279073, 34.49979859059624],
      [28.479366528107334, 34.49688454466361],
      [28.479239522079915, 34.493288050698766],
    ], {
      color: '#ff9933',
      fillColor: '#ff9933',
      fillOpacity: 0.5,
      radius: 500,
    }).addTo(map);

    // let label = L.
  });
})(jQuery);
