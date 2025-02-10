// const webpack = require('webpack');
// const path = require('path');
// const CopyPlugin = require('copy-webpack-plugin');
// const MiniCssExtractPlugin = require('mini-css-extract-plugin');

// const config = {
//   entry: './scripts/theme.js',
//   output: {
//     path: path.resolve(__dirname, 'dist'),
//     filename: 'theme-scripts.min.js',
//     clean: true,
//   },
//   watchOptions: {
//     ignored: /node_modules/,
//   },
//   module: {
//     rules: [
//       {
//         test: /\.js$/,
//         use: 'babel-loader',
//         exclude: /node_modules/
//       },
//       {
//         test: /\.css$/,
//         use: [
//           MiniCssExtractPlugin.loader,
//           {
//             loader: 'css-loader',
//             options: {
//               importLoaders: 1,
//             }
//           },
//           'postcss-loader'
//         ]
//       },
//       {
//         test: /\.scss$/,
//         use: [
//           MiniCssExtractPlugin.loader,
//           'css-loader',
//           'sass-loader'
//         ]
//       },
//       {
//         test: /\.svg$/,
//         use: 'file-loader'
//       }
//     ]
//   },
//   plugins: [
//     new CopyPlugin({
//       patterns: [{ from: 'images', to : 'images' }],
//     }),
//     new MiniCssExtractPlugin({
//         filename: 'theme-styles.min.css', // Output file name for CSS
//         chunkFilename: '[id].css', // Output file name for dynamically imported CSS
//     })
//   ]
// };

// module.exports = config;

const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: './scripts/theme.js',  // Your main JavaScript file
  output: {
    filename: 'theme-scripts.min.js',
    path: path.resolve(__dirname, 'dist'),
    clean: true, // Clean the output directory before each build
  },
  module: {
    rules: [
      {
        test: /\.css$/, 
        use: [
          MiniCssExtractPlugin.loader, // Extract CSS into files
          'css-loader', // Turns CSS into JS
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'theme-scripts.min.css', // Output CSS file
    }),
  ],
};