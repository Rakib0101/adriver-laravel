<template>
  <Chart
    :size="{ width: 674, height: 354 }"
    :data="data"
    :margin="margin"
    :direction="direction"
    :axis="axis"
  >
    <template #layers>
      <Grid strokeDasharray="2,2" />
      <Area
        :dataKeys="['name', 'pl']"
        type="monotone"
        :areaStyle="{ fill: '#58B32B' }"
      />
      <Line
        :dataKeys="['name', 'pl']"
        type="monotone"
        :lineStyle="{
          stroke: '#58B32B',
        }"
      />
      <Marker
        v-if="marker"
        :value="1000"
        label="Mean."
        color="green"
        strokeWidth="2"
        strokeDasharray="6 6"
      />
    </template>

    <template #widgets>
      <Tooltip
        borderColor="#48CAE4"
        :config="{
          pl: { color: '#9f7aea' },
          avg: { hide: true },
          inc: { hide: true },
        }"
      />
    </template>
  </Chart>
</template>

<script>
import { Chart, Grid, Line, Area } from "vue3-charts";

export default {
  components: { Chart, Grid, Line, Area },
  data() {
    return {
      data: [
        { name: "Jan", pl: 1000, avg: 500, inc: 300 },
        { name: "Feb", pl: 2000, avg: 900, inc: 400 },
        { name: "Apr", pl: 400, avg: 400, inc: 500 },
        { name: "Mar", pl: 3100, avg: 1300, inc: 700 },
        { name: "May", pl: 200, avg: 100, inc: 200 },
        { name: "Jun", pl: 600, avg: 400, inc: 300 },
        { name: "Jul", pl: 500, avg: 90, inc: 100 },
      ],
      direction: "horizontal",
      margin: {
        left: 0,
        top: 20,
        right: 20,
        bottom: 0,
      },
      axis: {
        primary: {
          type: "band",
        },
        secondary: {
          domain: [0, "dataMax + 100"],
          type: "linear",
          ticks: 8,
        },
      },
    };
  },
};
</script>
