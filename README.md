# Scrollsequence Popup Preloader

The **Scrollsequence Popup Preloader** is a lightweight preloader popup that synchronizes with the loading state of Scrollsequence. It automatically closes once the preload event fires. Use this preloader to enhance user experience while your content loads.

## Installation

1. **Clone the Repository:**

Clone this repository to your local machine using the following command:

```bash
git clone https://github.com/scrollsequence/scrollsequence-popup.git
```

Alternatively you can download it as .zip file and install it on your WordPress instance. 

2. **Upload and Activate Plugin:**

Install and activate Scrollsequence Popup on your local or public WordPress installation.


3. **Enter Shortcode:**
Enter shortcode to the page where you want the popup preloader to be active

```code
[scrollsequencepopup]
```

4. Edit the code to suit your needs.

ssq-popup.php - main plugin file with HTML and CSS structure
ssq-popup-script.js - javascript that listens for *ssqPreloadPercentage* event that is emmited by Scrollsequence plugin. 