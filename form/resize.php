<?php
    function resize($resource, $dirThumbnail, $filename, $width, $height) {
        $imagick = new Imagick($resource);
        $imagick->resizeImage((int)$width, (int)$height, Imagick::FILTER_LANCZOS, 1, true);

        $imagick->writeImage($dirThumbnail . $filename);

        $imagick->clear();
        $imagick->destroy();
    }