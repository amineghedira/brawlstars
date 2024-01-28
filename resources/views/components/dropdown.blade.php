<form
                method="get"
                class="form"
                data-wf-page-id="64e71f3f7303690218eb5b3d"
                data-wf-element-id="73646ab4-9338-efe1-4174-8beb97328fa5"
            >
                <select
                    id="mapSelect"
                    class="select-field w-select"
                >
                    <option value="">Map</option>
                    <option value="all">All</option>
                    @foreach ($maps as $map)
                    <option value="{{ $map->name }}">{{ $map->name }}</option>
                    @endforeach
                </select>
                <select
                    id="modeSelect"
                    class="select-field-2 w-select"
                >
                    <option value="">Mode</option>
                    <option value="all">All</option>
                    @foreach ($modes as $mode)
                    <option value="{{ $mode->name }}">{{ $mode->name }}</option>
                    @endforeach
                </select>
                <select
                    id="brawlerSelect"
                    class="select-field-3 w-select"
                >
                    <option value="">Brawler</option>
                    <option value="all">All</option>
                    @foreach ($brawlers as $brawler)
                    <option value="{{ $brawler->name }}">{{ $brawler->name }}</option>
                    @endforeach
                </select>
</form>
<script>
    var mapSelect = document.getElementById('mapSelect');
    var modeSelect = document.getElementById('modeSelect');
    var brawlerSelect = document.getElementById('brawlerSelect');

    var urlParams = new URLSearchParams(window.location.search);

// Set the selected values in the dropdowns based on URL parameters
if (urlParams.has('map')) {
    mapSelect.value = urlParams.get('map');
}
if (urlParams.has('mode')) {
    modeSelect.value = urlParams.get('mode');
}
if (urlParams.has('brawler')) {
    brawlerSelect.value = urlParams.get('brawler');
}

    
    mapSelect.addEventListener('change', function() {
        if (modeSelect.value)    
          modeSelect.value = '';
        updateUrl();
    });

    modeSelect.addEventListener('change', function() {
    if (mapSelect.value)    
      mapSelect.value = '';
    updateUrl();
    });

    brawlerSelect.addEventListener('change', updateUrl);

    function updateUrl() {
        var selectedBrawler = brawlerSelect.value;
        var selectedMap = mapSelect.value;
        var selectedMode = modeSelect.value;
    

        var urlParams = [];

        if (selectedBrawler) {
            urlParams.push('brawler=' + encodeURIComponent(selectedBrawler));
        }

        // When a mode is selected, clear the selected map
        if (selectedMode) {
            urlParams.push('mode=' + encodeURIComponent(selectedMode));
        }

        // When a map is selected, clear the selected mode
        if (selectedMap) {
            urlParams.push('map=' + encodeURIComponent(selectedMap));
        }

        var newUrl = '/stats/' + (urlParams.length > 0 ? '?' + urlParams.join('&') : '');

        window.location.href = newUrl;
    }
</script>