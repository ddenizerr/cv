<script setup>

import {nextTick, onMounted, ref} from 'vue'
import {Loader} from '@googlemaps/js-api-loader'

const mapElement = ref(null)

const mapStyles = [
  {
    elementType: 'geometry',
    stylers: [{ color: '#ffffff' }] // white background
  },
  {
    elementType: 'labels.text.fill',
    stylers: [{ color: '#7D62F4' }] // midnight-moss purple
  },
  {
    elementType: 'labels.text.stroke',
    stylers: [{ color: '#ffffff' }] // white stroke for contrast
  },
  {
    featureType: 'administrative',
    elementType: 'geometry',
    stylers: [{ color: '#826AED' }] // slate-purple borders
  },
  {
    featureType: 'poi',
    stylers: [{ visibility: 'off' }] // hide POIs
  },
  {
    featureType: 'road',
    elementType: 'geometry',
    stylers: [{ color: '#e2d4f7' }] // soft light purple roads
  },
  {
    featureType: 'road',
    elementType: 'labels.text.fill',
    stylers: [{ color: '#7D62F4' }] // purple text
  },
  {
  featureType: 'road',
  elementType: 'labels.icon',
  stylers: [{ visibility: 'off' }] // hides road signs/icons
},
{
  featureType: 'road',
  elementType: 'labels.text',
  stylers: [{ visibility: 'off' }] // hides road names
},
{
  featureType: 'administrative.locality',
  elementType: 'labels',
  stylers: [{ visibility: 'off' }]
},
  {
    featureType: 'transit',
    stylers: [{ visibility: 'off' }] // hide transit
  },
  {
    featureType: 'water',
    elementType: 'geometry',
    stylers: [{ color: '#f7f6f8' }] // pale mist water
  }
]

onMounted(async () => {
    await nextTick()

    if (!mapElement.value) return //fail safe if ref not yet ready

    const loader = new Loader({
        apiKey: import.meta.env.VITE_GOOGLE_MAPS_API_KEY, // Replace with your actual API key
        version: 'weekly',
        libraries: ['marker'],
    })

    const google = await loader.load()

    const map = new google.maps.Map(mapElement.value, {
        center: {lat: 51.8985, lng: -8.4756}, // Cork City
        zoom: 15,
        styles: mapStyles,
        mapTypeControl: false,
        fullScreenControl: false,
        streetViewControl: false,

    })
})

</script>

<template>
  <div class="map-wrapper">
    <div class="map-label">
      Map
    </div>
    <div ref="mapElement" class="map-container">
    </div>
      <div class="map-footer">
          <span class="city">Cork </span>
          <span class="country">Ireland</span>
      </div>

  </div>
</template>

<style scoped>
.map-wrapper {
  position: relative;
  width: 100%;
  height: 400px;
}

.map-label {
  position: absolute;
  top: 10px;
  left: 10px;
  background: white;
  color: #7D62F4;
  font-weight: bold;
  padding: 6px 12px;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  font-size: 0.9rem;
  z-index: 10;
}

.map-container {
  width: 100%;
  height: 100%;
  border: 3px solid #f1f1f1;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.map-footer {
  position: absolute;
  bottom: 1px;
  width: 100%;
  height: 25%;
  text-align: center;
  letter-spacing: 0.2rem;
  line-height: 1.4rem;
  padding-top: 2.4rem;
  left: 50%;
  transform: translateX(-50%);
  border-top: transparent;
  background: linear-gradient(to top, white 20%, rgba(255, 255, 255, 0));
  color: #7D62F4;
  font-weight: bold;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  font-size: 2rem;
  font-family: 'Lato', sans-serif;
  z-index: 10;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.map-footer .city {
  font-size: 1.5rem;
}
.map-footer .country {
  font-size: 1.2rem;
}
</style>
