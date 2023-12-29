# Qrcode Generator

### Create QR codes from an MIT licensed project.

This is a simplified version of https://github.com/kreativekorp/barcode


## How to use?

- First, download the 'qrcode.php' file. If you are an experienced user of the language, feel free to take the plunge and edit the code. If you want something quick and efficient, use the original that I made available here.

- Now, with the file downloaded, feel free to program your 'main.php', or if you prefer, use what I made available.
    
    - If you are programming a main file from scratch, remember to include 'qrcode.php'.

            <?php   
                include 'qrcode.php';
                ....
                rest of the code.
                ....
            ?>
<br>

- In the 'main.php' code that I made available, I used some reserved options that appear in 'qrcode.php'. Look:
        
        <?php
            ...   
            $file = "files/{$name}";
            $options = array(
                'w' => 500,
                'h' => 500
            );
            ...
        ?>    

    
        
    - As stated above, I used the 'w' and 'h' options, with 'w' being the widthw 'h' for the height of the QR code. 

    <br>

- If you want to add other options to your 'main.php', see the options below and feel free.

        d- Data. Encode in Shift-JIS for kanji mode.

        w- Image width. Substitutions sfou sx.

        h- Image height. Substitutions sfou sy.

        sf- Scale factor. The default is 4.

        sx- Horizontal scale factor. Substitutions sf.

        sy- Vertical scale factor. Substitutions sf.

        p- Filling. The default is 0.

        pv- Upper and lower padding. The default is the p value.

        ph- Left and right padding. The default is the p value.

        en- Superior padding. The default is the pv value.

        pl- Left padding. The default is the ph value.

        pr- Right filling. The default is the ph value.

        pb- Bottom padding. The default is the pv value.

        bc- Background color in #RRGGBBformat.

        fc- Foreground color in #RRGGBBformat.

        md- Module density. A number between 0 and 1. The default is 1.

        wq- Width of quiet area units. The default is 1. Use 0 to suppress the silent area.

        wm- Width of modules and narrow spaces. The default is 1.