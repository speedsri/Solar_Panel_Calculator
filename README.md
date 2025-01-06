# Solar Panel System Calculator

A lightweight, browser-based calculator for estimating solar panel system output based on various parameters. This tool helps users calculate potential solar energy production using inputs like roof area, panel efficiency, solar irradiance, and system performance.

## Features

- Real-time calculations
- Interactive sliders for easy input
- Responsive design
- Calculations include:
  - Daily energy production
  - Monthly energy production
  - Annual energy production
  - Peak power output
- Modern gradient UI
- No external dependencies

## Demo

![Solar Panel Calculator Demo](demo.gif) <!-- You can add a screenshot or GIF of your application here -->

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/solar-panel-calculator.git
   ```

2. Simple Setup:
   - No build process required
   - No dependencies to install
   - Just open `index.html` in a web browser

3. Web Server Setup (Optional):
   - Copy the files to your web server directory
   - Configure your server to serve the HTML file
   - Access through `http://yourdomain.com/path/to/calculator`

## Usage Guide

### Basic Usage

1. Open the calculator in your web browser
2. Adjust the sliders for:
   - Roof Area (10-200 m²)
   - Solar Panel Efficiency (15-25%)
   - Solar Irradiance (3-7 kWh/m²/day)
   - Performance Ratio (0.7-0.9)
3. View real-time results for:
   - Daily Energy Production
   - Monthly Energy Production
   - Annual Energy Production
   - Estimated Peak Power

### Input Parameters Explained

1. **Roof Area**
   - Measure: Square meters (m²)
   - Range: 10-200 m²
   - Purpose: Total available area for solar panel installation

2. **Solar Panel Efficiency**
   - Measure: Percentage (%)
   - Range: 15-25%
   - Purpose: Conversion efficiency of solar panels
   - Note: Higher efficiency panels cost more but require less space

3. **Solar Irradiance**
   - Measure: kWh/m²/day
   - Range: 3-7 kWh/m²/day
   - Purpose: Average daily solar energy received
   - Note: Varies by geographical location

4. **Performance Ratio**
   - Measure: Decimal (0.7-0.9)
   - Purpose: Accounts for system losses
   - Factors: Shading, dust, temperature, wiring losses

## Customization

### Modifying Input Ranges

Adjust the slider ranges in the HTML:
```html
<input type="range" id="area" min="10" max="200" value="50" step="5">
```

### Styling Changes

The calculator uses CSS with:
- Custom gradient background
- Responsive design
- Modern shadow effects

Modify the styles in the `<style>` section:
```css
body {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}
```

### Calculation Formula

The power output is calculated using:
```javascript
dailyEnergy = area * efficiency * irradiance * performanceRatio
```

## Technical Details

### File Structure
```
solar-panel-calculator/
│
├── index.html     # Main application file (includes CSS and JavaScript)
├── README.md      # Documentation
└── demo.gif       # Demo animation (optional)
```

### Browser Compatibility
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

- Based on standard solar energy calculation formulas
- UI inspired by modern web design principles
