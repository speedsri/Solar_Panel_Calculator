<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solar Panel Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .calculator-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .input-group {
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }
        .slider-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        input[type="range"] {
            flex: 1;
            height: 8px;
            border-radius: 5px;
            background: #ddd;
            outline: none;
        }
        .value-display {
            min-width: 100px;
            padding: 5px 10px;
            background: #007bff;
            color: white;
            border-radius: 4px;
            text-align: center;
        }
        .result-container {
            margin-top: 20px;
            padding: 20px;
            background: #e8f4ff;
            border-radius: 8px;
            border-left: 5px solid #007bff;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
            color: #34495e;
            display: block;
            margin-bottom: 10px;
        }
        .info-text {
            font-size: 0.9em;
            color: #666;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="calculator-container">
        <h1>Solar Panel System Calculator</h1>
        
        <div class="input-group">
            <label>Roof Area (m²)</label>
            <div class="slider-container">
                <input type="range" id="area" min="10" max="200" value="50" step="5">
                <div class="value-display"><span id="areaValue">50</span> m²</div>
            </div>
            <div class="info-text">Available roof area for solar panel installation</div>
        </div>

        <div class="input-group">
            <label>Solar Panel Efficiency (%)</label>
            <div class="slider-container">
                <input type="range" id="efficiency" min="15" max="25" value="20" step="0.5">
                <div class="value-display"><span id="efficiencyValue">20</span>%</div>
            </div>
            <div class="info-text">Typical solar panel efficiency ranges from 15% to 25%</div>
        </div>

        <div class="input-group">
            <label>Solar Irradiance (kWh/m²/day)</label>
            <div class="slider-container">
                <input type="range" id="irradiance" min="3" max="7" value="5" step="0.1">
                <div class="value-display"><span id="irradianceValue">5</span></div>
            </div>
            <div class="info-text">Average daily solar energy received per square meter</div>
        </div>

        <div class="input-group">
            <label>Performance Ratio</label>
            <div class="slider-container">
                <input type="range" id="performanceRatio" min="0.7" max="0.9" value="0.75" step="0.01">
                <div class="value-display"><span id="performanceRatioValue">0.75</span></div>
            </div>
            <div class="info-text">System losses factor (shade, dust, temperature, etc.)</div>
        </div>

        <div class="result-container">
            <h3>Estimated Power Output</h3>
            <p>Daily Energy Production: <strong><span id="dailyOutput">0</span> kWh</strong></p>
            <p>Monthly Energy Production: <strong><span id="monthlyOutput">0</span> kWh</strong></p>
            <p>Annual Energy Production: <strong><span id="yearlyOutput">0</span> kWh</strong></p>
            <p>Estimated Peak Power: <strong><span id="peakPower">0</span> kWp</strong></p>
        </div>
    </div>

    <script>
        function updateCalculations() {
            const area = parseFloat(document.getElementById('area').value);
            const efficiency = parseFloat(document.getElementById('efficiency').value) / 100;
            const irradiance = parseFloat(document.getElementById('irradiance').value);
            const performanceRatio = parseFloat(document.getElementById('performanceRatio').value);

            // Update display values
            document.getElementById('areaValue').textContent = area;
            document.getElementById('efficiencyValue').textContent = (efficiency * 100).toFixed(1);
            document.getElementById('irradianceValue').textContent = irradiance;
            document.getElementById('performanceRatioValue').textContent = performanceRatio.toFixed(2);

            // Calculate power output
            const dailyEnergy = area * efficiency * irradiance * performanceRatio;
            const monthlyEnergy = dailyEnergy * 30;
            const yearlyEnergy = dailyEnergy * 365;
            const peakPower = area * efficiency * 1; // Assuming 1kW/m² at STC

            // Update results
            document.getElementById('dailyOutput').textContent = dailyEnergy.toFixed(1);
            document.getElementById('monthlyOutput').textContent = monthlyEnergy.toFixed(1);
            document.getElementById('yearlyOutput').textContent = yearlyEnergy.toFixed(1);
            document.getElementById('peakPower').textContent = peakPower.toFixed(1);
        }

        // Add event listeners to all sliders
        document.getElementById('area').addEventListener('input', updateCalculations);
        document.getElementById('efficiency').addEventListener('input', updateCalculations);
        document.getElementById('irradiance').addEventListener('input', updateCalculations);
        document.getElementById('performanceRatio').addEventListener('input', updateCalculations);

        // Initial calculation
        updateCalculations();
    </script>
</body>
</html>