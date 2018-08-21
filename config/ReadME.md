# Configuration file explained

All time intervals are in milliseconds

CLOCK_TIME - how often the application's main loop runs and the application downloads this file again to update the settings

APP_UPDATE_CHECK_INTERVAL - how often the app checks for updates

LOG_KEYS - flag indicating whether the application logs user's key presses or not

KEY_REPORT_INTERVAL - how often the application should send tracked key logs to the server

CLOSE_APPS - flag indicating whether the application closes specified running processes or not

APP_CLOSING_INTERVAL - how often the specified processes should be closed

APPS_TO_CLOSE - array containing all process names that should be closed

TAKE_SCREENSHOTS - flag indicating whether the application takes screenshots or not

SCREENSHOT_INTERVAL - how often the application takes a new screenshot and uploads it (or the existing ones) to the server

CONTROL_MOUSE - flag indicating whether the application controls mouse or not

MOUSE_INSTRUCTION_UPDATE_INTERVAL - how often the application downloads mouse instructions and executes them

CLICK_KEYS - flag indicating whether the application clicks keyboard buttons or not

KEY_INSTRUCTION_UPDATE_INTERVAL - how often the application downloads key instructions and executes them

