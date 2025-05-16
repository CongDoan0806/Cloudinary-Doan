# Cách sử dụng
## install cloudinary
    ```bash  
    composer require cloudinary-labs/cloudinary-laravel 
    ```
   
    Or add the following line to the require block of your composer.json file.
    
   "unicodeveloper/laravel-cloudinary": "1.0.0-beta"

    

## Configuration
    <pre lang="markdown"> ```bash  php artisan vendor:publish --provider="Unicodeveloper\Cloudinary\CloudinaryServiceProvider" --tag="laravel-cloudinary-config" ``` </pre>
    <pre lang="markdown"> ```bash  ``` </pre>
## API Keys
    <pre lang="markdown"> ```bash 
    CLOUDINARY_URL=xxxxxxxxxxxxx
    CLOUDINARY_UPLOAD_PRESET=xxxxxxxxxxxxx
    CLOUDINARY_NOTIFICATION_URL= ``` </pre>

    ### Các bước lấy API Keys
    **B1** chọn setting
    **B2** chọn upload presets -> add upload presets -> Go to legacy
    **B3** Diền preset name -> chọn signing mode (signed)->
    **B4** chọn upload pulations -> edit -> width(2000), scale(limit), quality(90)
    **B5** Save và qua tab API Key 

## Usage
    <pre lang="markdown"> ```bash 
    
        // Upload an Image File to Cloudinary with One line of Code
        $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();
        
        // Upload a Video File to Cloudinary with One line of Code
        $uploadedFileUrl = Cloudinary::uploadVideo($request->file('file')->getRealPath())->getSecurePath();
        
        // Upload any File to Cloudinary with One line of Code
        $uploadedFileUrl = Cloudinary::uploadFile($request->file('file')->getRealPath())->getSecurePath();
        
        /**
         * This package also exposes a helper function you can use if you are not a fan of Facades
         * Shorter, expressive, fluent using the cloudinary() function
         */
        
        // Upload an Image File to Cloudinary with One line of Code
        $uploadedFileUrl = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();
        
        // Upload a Video File to Cloudinary with One line of Code
        $uploadedFileUrl = cloudinary()->uploadVideo($request->file('file')->getRealPath())->getSecurePath();
        
        // Upload any File to Cloudinary with One line of Code
        $uploadedFileUrl = cloudinary()->uploadFile($request->file('file')->getRealPath())->getSecurePath();
        
        /**
         * You can also skip the Cloudinary Facade or helper method and laravel-ize your uploads
         * by simply calling the storeOnCloudinary() method on the file itself
         */
        
        // Store the uploaded file in the "lambogini" directory on Cloudinary
        $result = $request->file('image')->store('lambogini', 'cloudinary');
        
        // Store the uploaded file on Cloudinary
        $result = $request->file('file')->storeOnCloudinary();
        $result = $request->file->storeOnCloudinary();
        
        // Store the uploaded file in the "lambogini" directory on Cloudinary
        $result = $request->file->storeOnCloudinary('lambogini');
        
        // Store the uploaded file in the "lambogini" directory with the filename "prosper"
        $result = $request->file->storeOnCloudinaryAs('lambogini', 'prosper');
        
        $result->getPath();               // Get the url of the uploaded file; http  
        $result->getSecurePath();         // Get the url of the uploaded file; https  
        $result->getSize();               // Get the size of the uploaded file in bytes  
        $result->getReadableSize();       // Get the size in MB, GB, etc. E.g 1.8 MB  
        $result->getFileType();           // Get the file type  
        $result->getFileName();           // Get the current filename  
        $result->getOriginalFileName();   // Get the original filename  
        $result->getPublicId();           // Get the Cloudinary public_id  
        $result->getExtension();          // Get file extension  
        $result->getWidth();              // Get width (for images/videos)  
        $result->getHeight();             // Get height (for images/videos)  
        $result->getTimeUploaded();       // Get upload timestamp  

    ``` </pre>

