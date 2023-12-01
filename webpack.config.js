const path = require('path');

module.exports = {
  entry: './src/index.js', // Your main JavaScript file
  output: {
    filename: 'bundle.js', // The output bundle
    path: path.resolve(__dirname, 'dist'),
  },
  // You can add more configurations like loaders, plugins here
};
