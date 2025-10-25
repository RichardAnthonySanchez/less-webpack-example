# LESS + Webpack: Yacht Booking Mock Up

Simple one-page mock site to demonstrate using **LESS** with **Webpack**.
This repository is a front-end build demo only — no backend or live booking functionality.

## Overview

A small landing page mock (hero, featured yachts, booking form) built to show a clean LESS + Webpack setup and modular styling practices.

## Tech

- Webpack 5 (split configs: `webpack.dev.js` & `webpack.prod.js`)
- LESS (with `less-loader`)

## Install (local)

```bash
# install dependencies (run once)
npm install
```

## Development

```bash
# start dev server (opens browser)
npm run start
```

This runs `webpack serve --open --config webpack.dev.js` as defined in `package.json`.

## Production build

```bash
# build optimized output
npm run build
```

This runs `webpack --config webpack.prod.js` and outputs to your configured `dist` folder.

## Notes for reviewers

- Purpose: **tooling & styling demonstration** — intended to show familiarity with LESS and bundling with Webpack.
- This is a mock front end only; no booking back end is included.
- File structure is intentionally flexible — can provide a recommended layout on request.
