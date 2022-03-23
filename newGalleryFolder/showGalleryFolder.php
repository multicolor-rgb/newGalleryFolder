
<?php 

function showGalleryFolder($filefolder,$width ='250px',$height ='150px'){
    global $SITEURL;

echo '<div class="newGalleryFolder">';
foreach(glob('data/uploads/'.$filefolder."/*.{jpg,png,jpeg,gif,webp,bmp}", GLOB_BRACE) as $file)
if($file != '.' && $file != '..'&& $file != '' ){
echo '<a href="'.$SITEURL.$file.'" class="glightbox" data-gallery="gallery1">';
echo'<img src="'.$SITEURL.$file.'"  style="width:'.$width.';height:'.$height.';display:block;object-fit:cover;object-position:center center;"  alt="image"/>';  
echo'</a>';  
};
echo'</div>';
};


function showGalleryFolderOnPage($filefolder,$pageslug, $width,$height){
    global $SITEURL;

    $slugs = return_page_slug();

    if($slugs == $pageslug){

echo '<div class="newGalleryFolder">';
foreach(glob('data/uploads/'.$filefolder."/*.{jpg,png,jpeg,gif,webp,bmp}", GLOB_BRACE) as $file)
if($file != '.' && $file != '..'&& $file != '' ){
echo '<a href="'.$SITEURL.$file.'" class="glightbox" data-gallery="gallery1">';
echo'<img src="'.$SITEURL.$file.'"  style="width:'.$width.';height:'.$height.';display:block;object-fit:cover;object-position:center center;"  alt="image"/>';  
echo'</a>';  
};
echo'</div>';

    };

};




function showGalleryFolderOnPageReverse($filefolder,$pageslug,$width = '250px',$height = '150px'){
    global $SITEURL;

    $slugs = return_page_slug();

    if($slugs == $pageslug){

echo '<div class="newGalleryFolder">';
foreach(array_reverse(glob('data/uploads/'.$filefolder."/*.{jpg,png,jpeg,gif,webp,bmp}", GLOB_BRACE)) as $file)
if($file != '.' && $file != '..'&& $file != '' ){
echo '<a href="'.$SITEURL.$file.'" class="glightbox" data-gallery="gallery1">';
echo'<img src="'.$SITEURL.$file.'"  style="width:'.$width.';height:'.$height.';display:block;object-fit:cover;object-position:center center;"  alt="image"/>';  
echo'</a>';  
};
echo'</div>';

    };

};



function showGalleryFolderReverse($filefolder,$width = '250px',$height = '150px'){
    global $SITEURL;

echo '<div class="newGalleryFolder">';
foreach( array_reverse(glob('data/uploads/'.$filefolder."/*.{jpg,png,jpeg,gif,webp,bmp}", GLOB_BRACE)) as $file)
if($file != '.' && $file != '..'&& $file != '' ){
echo '<a href="'.$SITEURL.$file.'" class="glightbox" data-gallery="gallery1">';
echo'<img src="'.$SITEURL.$file.'"   style="width:'.$width.';height:'.$height.';display:block;object-fit:cover;object-position:center center;"  alt="image"/>';  
echo'</a>';  
};
echo'</div>';
};

 
function showGalleryFolderRoot($width = '250px',$height = '150px'){
    global $SITEURL;

echo '<div class="newGalleryFolder">';
foreach(glob('data/uploads/*.{jpg,png,jpeg,gif,webp,bmp}', GLOB_BRACE) as $file)
if($file != '.' && $file != '..'&& $file != '' ){
echo '<a href="'.$SITEURL.$file.'" class="glightbox" data-gallery="gallery1">';
echo'<img src="'.$SITEURL.$file.'" style="width:'.$width.';height:'.$height.';display:block;object-fit:cover;object-position:center center;"  alt="image"/>';  
echo'</a>';  
};
echo'</div>';
};







 




?>