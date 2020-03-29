<template>
    <div class="text-white mb-8">
        <div class="places-input text-gray-800">
            <input type="text" class="w-full">
        </div>
        <div class="weather-container font-sans w-128 max-w-lg overflow-hidden bg-gray-900 showdow-lg mt-4">
            <div class="current-weather flex item-center justify-between px-6 py-8">
                <div>
                    <div class="text-6xl semibold">8<sup>0</sup>C</div>
                    <div>Feela like 2 <sup>0</sup>C</div>
                </div>
                <div class="mx-2 mr-30">
                    <div class="font-semibold">Cloudy</div>
                    <div>Toronto, Canada</div>
                </div>
                <div>Icon</div>
            </div> <!-- end current weather -->

            <div class="future-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden">
                <div class="flex items-center mt-9">
                    <div class="w-1/6 text-lg text-gray-200">NOW</div>
                    <div class="w-4/6 px-4 flex items-center">
                        <div>Icon</div>
                        <div class="ml-3">Cloudy with a chance of showers</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5 <sup>0</sup>C</div>
                        <div>-2 <sup>0</sup>C</div>
                    </div>
                </div>
                <div class="flex items-center mt-9">
                    <div class="w-1/6 text-lg text-gray-200">NOW</div>
                    <div class="w-4/6 px-4 flex items-center">
                        <div>Icon</div>
                        <div class="ml-3">Cloudy with a chance of showers</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5 <sup>0</sup>C</div>
                        <div>-2 <sup>0</sup>C</div>
                    </div>
                </div>
                <div class="flex items-center mt-9">
                    <div class="w-1/6 text-lg text-gray-200">NOW</div>
                    <div class="w-4/6 px-4 flex items-center">
                        <div>Icon</div>
                        <div class="ml-3">Cloudy with a chance of showers</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5 <sup>0</sup>C</div>
                        <div>-2 <sup>0</sup>C</div>
                    </div>
                </div>
            </div> <!-- end future weather -->
        </div>  <!-- end of weather-container -->
    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('Component mounted.')
            this.fetchData()
        },
        method: {
            fetchData(){
                fetch(`/api/weather`)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                })
            }
        }
    }
</script>
