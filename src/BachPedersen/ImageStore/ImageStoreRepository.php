<?php
/*
   Copyright 2014: Kaspar Bach Pedersen

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

namespace BachPedersen\ImageStore;
use BachPedersen\ImageStore\Model\ImageRaw;
use BachPedersen\ImageStore\Model\ImageSize;
use Intervention\Image\Image;

/**
 * Interface ImageStoreRepository
 * @package BachPedersen\RiakImageStore
 */
interface ImageStoreRepository
{

    /** Save image, and save resized images as well if sizes are provided.
     * @param Image $image
     * @param string|null $name imagename or null to autogenerate a name
     * @param ImageSize[] $sizes
     * @param bool $saveOriginal
     * @return string image name
     */
    public function storeImageInRiak(Image $image, $name, $sizes = [], $saveOriginal = true);

    /** Get an image with specified size
     * @param string $name
     * @param ImageSize $withSize if null is supplied the original image is returned
     * @return ImageRaw|null raw image or null
     */
    public function getImage($name, ImageSize $withSize = null);

}
