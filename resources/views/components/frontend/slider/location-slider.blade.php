<div class="location-slider mx-5" x-data="locationSlider()">
    <input type="range" min="0" max="20" step="1" x-ref="slider" x-model="sliderValue"
        @input="updateValue" />
    <div class="tooltip" :style="{ left: tooltipPosition }"></div>
    <div class="flex justify-between items-center text-xs text-gray-400">
        <p>0 Mile</p>
        <p>20 Miles</p>
    </div>
</div>

<script>
    function locationSlider() {
        return {
            const slider = ref(null);
            const sliderValue = ref(0);
            const tooltipVisible = ref(false);

            function updateValue(event) {
                sliderValue.value = parseInt(event.target.value);
                tooltipVisible.value = true;
            }

            const tooltipPosition = computed(() => {
                if (!slider.value) return '0';
                const percentage = (sliderValue.value / slider.value.max) * 100;
                const value = `calc(${percentage}% + (${1 - percentage * 0.16}px))`;
                slider.value.style.setProperty('--value', `${percentage}%`);
                return value;
            });

            return {
                slider,
                sliderValue,
                updateValue,
                tooltipVisible,
                tooltipPosition
            };
        }
    }
</script>

<style>
    .location-slider {
        position: relative;
    }

    .location-slider input[type="range"] {
        width: 100%;
        -webkit-appearance: none;
        background: linear-gradient(to right, #58B32B 0%, #58B32B var(--value), #DEE6DC var(--value), #DEE6DC 100%);
        border-radius: 40px;
        height: 8px;
    }

    .location-slider input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        border: 2px solid #fff;
        height: 14px;
        width: 14px;
        border-radius: 50%;
        background-color: #58B32B;
        cursor: pointer;
    }


    .location-slider .tooltip {
        position: absolute;
        top: -18px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        padding: 2px 6px;
        background: #58B32B;
        border-radius: 3px;
        color: #fff;
        font-size: 12px;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
    }

    .location-slider input[type="range"]:hover+.tooltip,
    .location-slider input[type="range"]:focus+.tooltip {
        opacity: 1;
    }
</style>

