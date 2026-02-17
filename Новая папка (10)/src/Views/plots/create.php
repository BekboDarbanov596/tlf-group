<div class="mb-24 border-b-2 border-gray-900/5 pb-16">
    <div class="flex items-center gap-8">
        <div class="w-20 h-20 bg-black rounded-[32px] flex items-center justify-center text-white shadow-2xl">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </div>
        <div>
            <h2 class="text-6xl font-black tracking-tighter text-gray-900 leading-none">Регистрация актива</h2>
            <p class="text-2xl text-gray-400 font-light mt-4 italic">Внесение земельного участка в реестр AgroCare Pro
            </p>
        </div>
    </div>
</div>

<!-- Leaflet & Geoman CSS/JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-geometryutil/0.10.3/leaflet.geometryutil.min.js"></script>

<style>
    #map {
        height: 700px;
        border-radius: 64px;
        z-index: 10;
        margin-bottom: 4rem;
        border: 2px solid rgba(0, 0, 0, 0.05);
        box-shadow: inset 0 0 40px rgba(0, 0, 0, 0.02);
    }

    .leaflet-container {
        background: #f8fafc;
    }

    .leaflet-pm-toolbar {
        background: #1a1a1a !important;
        border-radius: 16px !important;
        padding: 4px !important;
    }

    .leaflet-bar a {
        background: #1a1a1a !important;
        color: #fff !important;
        border-color: #333 !important;
    }
</style>

<form action="/plots/create" method="POST" class="space-y-16">
    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
    <input type="hidden" name="latitude" id="lat">
    <input type="hidden" name="longitude" id="lng">
    <input type="hidden" name="boundary_geojson" id="boundary_geojson">

    <div class="p-16 bg-white border border-gray-100 rounded-[80px] shadow-sm relative overflow-hidden group mb-16">
        <div class="flex items-center justify-between mb-12">
            <h3 class="text-3xl font-black text-gray-900 flex items-center gap-4">
                <span class="w-2 h-8 bg-accent rounded-full"></span>
                Геолокация и Границы
            </h3>
            <span id="calc-status" class="text-2xl font-black text-accent italic">Ожидание отрисовки</span>
        </div>
        <div id="map"></div>
        <p class="text-xl text-gray-400 font-light italic text-center">Используйте инструмент «Polygon» слева для точной
            отрисовки границ актива.</p>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-16">
        <!-- Technical Data -->
        <div class="p-16 bg-white border border-gray-100 rounded-[64px] shadow-sm relative overflow-hidden">
            <h3 class="text-3xl font-black text-gray-900 mb-12">Спецификации участка</h3>
            <div class="space-y-10">
                <div class="space-y-4">
                    <label class="block text-[12px] font-black text-gray-400 uppercase tracking-widest ml-1">Название
                        реестровой записи</label>
                    <input type="text" name="title" required placeholder="Напр: Северный Сектор #4"
                        class="w-full bg-gray-50 border-2 border-transparent rounded-[32px] px-8 py-6 text-xl font-bold focus:bg-white focus:border-accent focus:outline-none transition-all duration-300 text-gray-900 shadow-inner">
                </div>
                <div class="grid grid-cols-2 gap-10">
                    <div class="space-y-4">
                        <label class="block text-[12px] font-black text-gray-400 uppercase tracking-widest ml-1">Площадь
                            (ГА)</label>
                        <input type="number" step="0.01" name="area" required
                            class="w-full bg-gray-50 border-2 border-transparent rounded-[24px] px-8 py-5 text-xl font-bold focus:bg-white focus:border-accent focus:outline-none transition-all duration-300 text-gray-900 shadow-inner">
                    </div>
                    <div class="space-y-4">
                        <label class="block text-[12px] font-black text-gray-400 uppercase tracking-widest ml-1">Класс
                            грунта</label>
                        <select name="soil_type"
                            class="w-full bg-gray-50 border-2 border-transparent rounded-[24px] px-8 py-5 text-lg font-bold focus:bg-white focus:border-accent focus:outline-none transition-all duration-300 text-gray-900 appearance-none cursor-pointer shadow-inner">
                            <option value="chernozem">Чернозем</option>
                            <option value="clay">Глина</option>
                            <option value="sand">Песчаная</option>
                            <option value="loam">Суглинок</option>
                        </select>
                    </div>
                </div>
                <div
                    class="p-8 bg-gray-50 rounded-[40px] border-2 border-transparent hover:border-accent/10 transition-all duration-500 cursor-pointer group">
                    <label class="flex items-center gap-6 cursor-pointer">
                        <input type="checkbox" name="irrigation" value="1"
                            class="peer w-8 h-8 rounded-xl bg-white border-gray-200 text-accent focus:ring-accent focus:ring-offset-0 transition-all cursor-pointer">
                        <span class="text-xl font-black text-gray-900 uppercase tracking-tight">Подключена система
                            орошения</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- History Module -->
        <div class="p-16 bg-white border border-gray-100 rounded-[64px] shadow-sm relative overflow-hidden">
            <h3 class="text-3xl font-black text-gray-900 mb-12">Журнал севооборота</h3>
            <div class="space-y-6">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div
                        class="p-8 bg-gray-50 rounded-[40px] flex items-center gap-8 border-2 border-transparent hover:border-black/5 transition-all">
                        <div class="text-4xl font-black text-gray-200 italic"><?= date('Y') - $i ?></div>
                        <div class="flex-1 space-y-4">
                            <input type="text" name="culture_<?= $i ?>" placeholder="Культура"
                                class="w-full bg-white/50 border-0 rounded-2xl px-6 py-3 font-bold focus:bg-white focus:ring-2 focus:ring-accent outline-none transition-all">
                            <input type="text" name="notes_<?= $i ?>" placeholder="Примечание"
                                class="w-full bg-white/50 border-0 rounded-2xl px-6 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-accent outline-none transition-all">
                        </div>
                        <input type="hidden" name="year_<?= $i ?>" value="<?= date('Y') - $i ?>">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between pt-16 gap-8">
        <a href="/dashboard"
            class="px-16 py-8 rounded-[32px] font-black text-2xl text-gray-400 hover:text-gray-900 transition-all">
            Отменить действие
        </a>
        <button type="submit"
            class="group relative px-24 py-8 rounded-[32px] font-black text-2xl text-white bg-gray-900 overflow-hidden shadow-2xl transition-all duration-500 hover:-translate-y-2 hover:bg-accent active:scale-95">
            <span class="relative z-10 flex items-center gap-6">
                Зафиксировать актив
                <svg class="w-8 h-8 group-hover:translate-x-3 transition-transform duration-500" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </span>
            <div
                class="absolute top-0 -left-[100%] w-[50%] h-full bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12 group-hover:animate-shine">
            </div>
        </button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Map
        const map = L.map('map').setView([43.2389, 76.8897], 13); // Default Almaty

        // Colorful 'Voyager' Basemap
        const voyager = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; OpenStreetMap contributors &copy; CARTO'
        }).addTo(map);

        // Satellite/Hybrid layer for realistic field view
        const satellite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        });

        const baseMaps = {
            "Карта (Цветная)": voyager,
            "Спутник": satellite
        };

        L.control.layers(baseMaps).addTo(map);

        // Add Geoman controls with custom styling
        map.pm.addControls({
            position: 'topleft',
            drawCircle: false,
            drawMarker: false,
            drawPolyline: false,
            drawRectangle: true,
            drawCircleMarker: false,
            drawText: false,
            cutPolygon: false,
            rotateMode: false,
        });

        map.pm.setGlobalOptions({
            pathOptions: {
                color: '#10b981',
                fillColor: '#10b981',
                fillOpacity: 0.3
            }
        });

        map.pm.setLang('ru');

        map.on('pm:create', (e) => {
            const layer = e.layer;
            const geojson = layer.toGeoJSON();

            // Save GeoJSON
            document.getElementById('boundary_geojson').value = JSON.stringify(geojson);

            // Calculate Area
            if (e.shape === 'Polygon' || e.shape === 'Rectangle') {
                const latlngs = layer.getLatLngs()[0];
                const areaM2 = L.GeometryUtil.geodesicArea(latlngs);
                const hectares = (areaM2 / 10000).toFixed(2);

                document.getElementsByName('area')[0].value = hectares;
                document.getElementById('calc-status').innerText = `Рассчитано: ${hectares} га`;

                // Get Center for database
                const center = layer.getBounds().getCenter();
                document.getElementById('lat').value = center.lat;
                document.getElementById('lng').value = center.lng;
            }

            // Remove old layers if user draws new one
            map.eachLayer((l) => {
                if ((l instanceof L.Polygon || l instanceof L.Rectangle) && l !== layer) {
                    map.removeLayer(l);
                }
            });
        });
    });
</script>