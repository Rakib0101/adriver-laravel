<template>
  <div style="height: 100%; width: 100%">
    <l-map ref="map" v-model:zoom="zoom" :center="center">
      <l-tile-layer url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png" layer-type="base"
        name="OpenStreetMap"></l-tile-layer>
      <l-marker v-for="(marker, index) in markers" :key="index" :lat-lng="marker.position" :draggable="false"
        :icon="customIcon" @dragend="onMarkerMoved">
        <l-tooltip>{{ marker.tooltip }}</l-tooltip>
      </l-marker>
    </l-map>
  </div>
</template>

<script>
  import "leaflet/dist/leaflet.css";
  import { LMap, LTileLayer, LMarker, LTooltip } from "@vue-leaflet/vue-leaflet";
  import L from "leaflet";

  export default {
    components: {
      LMap,
      LTileLayer,
      LMarker,
      LTooltip
    },
    data() {
      return {
        zoom: 7,
        center: [23.8103, 90.4125],
        markers: [
          { position: [23.8103, 89.4125], tooltip: "Marker 1 Tooltip" },
          { position: [23.9000, 90.5500], tooltip: "Marker 2 Tooltip" },
          { position: [24.9000, 91.5500], tooltip: "Marker 3 Tooltip" },
          { position: [23.450, 90.8900], tooltip: "Marker 4 Tooltip" },
          { position: [22.9000, 89.5500], tooltip: "Marker 5 Tooltip" },
          // Add more marker data as needed
        ]
      };
    },
    methods: {
      onMarkerMoved(event) {
        // Handle marker movement if needed
      }
    },
    computed: {
      customIcon() {
        const iconUrl = "./map-marker.svg";
        const icon = L.icon({
          iconUrl,
          iconSize: [96, 96],
          iconAnchor: [16, 32],
          popupAnchor: [0, -32]
        });
        return icon;
      }
    }
  };
</script>