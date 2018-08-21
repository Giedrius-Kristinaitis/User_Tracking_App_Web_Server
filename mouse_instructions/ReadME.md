# Instructions file explained

The file must contain a JSON array populated with objects that have properties:

Name - name of the instruction (can be 'MOVE' or 'CLICK')

Extras - object with extra information for the instruction: 'MOVE' instruction must have extras named 'x' and 'y' (where to move the mouse), 'CLICK' instruction must have an extra named 'button' (which mouse button to click (can be 'RIGHT' or 'LEFT'))

Delay - delay time for the instruction in milliseconds

All instructions are executed in sequence right after the instruction file is downloaded by the application
