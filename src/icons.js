// Font Awesome Core
import { library, dom } from "@fortawesome/fontawesome-svg-core";

// --- UI / Navigation icons ---
import { faBars, faXmark } from "@fortawesome/free-solid-svg-icons";

// --- Socials ---
import {
  faFacebook,
  faInstagram,
  faXTwitter,
} from "@fortawesome/free-brands-svg-icons";

// --- Domain-specific (closest matches) ---
import {
  faSailboat, // 🛥️ boat
  faHandshake, // 🤝 trade/barter
  faMoneyBillTransfer, // 💸 transaction/rental
  faArrowsRotate, // 🔄 cycle/exchange
} from "@fortawesome/free-solid-svg-icons";

// Register all in library
library.add(
  faBars,
  faXmark,
  faFacebook,
  faInstagram,
  faXTwitter,
  faSailboat,
  faHandshake,
  faMoneyBillTransfer,
  faArrowsRotate
);

document.addEventListener("DOMContentLoaded", () => {
  dom.i2svg(); // converts all <i> tags in the live DOM to inline SVGs
});
