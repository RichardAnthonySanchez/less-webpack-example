# LESS + Webpack: Yacht Booking Mock-Up (WordPress Theme)

A simple one-page **WordPress** mock site demonstrating how to integrate **LESS** with **Webpack** for modular front-end development.
This project focuses on **tooling and styling setup** — no live booking or back-end logic is included.

---

## 🛠 Overview

A small landing page (hero, featured yachts, booking form) built as a **custom WordPress theme** to showcase:

- Clean **LESS + Webpack** architecture
- Seamless integration within a Dockerized WordPress environment
- Flexible theme structure for local development and testing

---

## ⚙️ Tech Stack

- **WordPress** (Dockerized)
- **MariaDB** (Dockerized)
- **Webpack 5** (`webpack.dev.js` & `webpack.prod.js`)
- **LESS** (via `less-loader`)
- **Node.js / npm**

---

## 🧩 Setup (Local)

Before starting, ensure you have **Docker** and **npm** installed.

### 1. Start WordPress + Database

```bash
sudo docker compose up -d
```

This will spin up WordPress (port **8000**) and MariaDB containers.
Once running, visit [http://localhost:8000](http://localhost:8000) to access WordPress.

### 2. Install Dependencies

```bash
npm install
```

---

## 🚀 Development

To test front-end changes in real time:

```bash
npm run start
```

This runs the Webpack dev server at **[http://localhost:8080](http://localhost:8080)**, allowing you to test LESS and JS before building the theme.
(Hot reloading is **not yet enabled**, so you may need to refresh manually.)

> 💡 Sometimes browser updates don’t appear at `localhost:8000` — switching the URL to `0.0.0.0:8000` usually resolves it.
> This is being investigated.

---

## 🧱 Production Build

After making changes to your LESS or JS files, rebuild the theme assets:

```bash
npm run build
```

This runs:

```bash
webpack --config webpack.prod.js
```

and outputs optimized files to the `/dist` directory used by WordPress.

---

## 🎨 WordPress Theme

After running Docker containers, navigate to:

**Dashboard → Appearance → Themes**

and activate the **LESS Theme** to preview the landing page.

---

## 🧭 Notes for Reviewers

- **Purpose:** Demonstrate front-end tooling (LESS + Webpack) inside a WordPress environment.
- **Scope:** Front-end only — no booking functionality or backend integration.
- **Structure:** Flexible layout to support experimentation and rapid development.
- **Next Steps:** Enable hot reloading and improve Docker sync between Webpack and WordPress.
