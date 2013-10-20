<?PHP
//ECHo "HELLO";
/*** check if a file was submitted ***/
if(!isset($_FILES['userfile']))
{
    echo '<p>Please select a file to upload </p>';
}
else
{
    try    {
        upload();
        /*** give praise and thanks to the php gods ***/
        echo '<p>Thank you for submitting</p>';
    }
    catch(Exception $e)
    {
        echo '<h4>'.$e->getMessage().'</h4>';
    }
}

ECHO "UPLOAD FILE PAGE ";
ECHO "<FORM enctype='multipart/form-data'  action='upload.php' method='post' >";
ECHO "UPLOAD  : <INPUT name='userfile' TYPE='file' />";
ECHO "<INPUT TYPE='submit' /></FORM>";


/*
 * Check the file is of an allowed type
 * Check if the uploaded file is no bigger thant the maximum allowed size
 * connect to the database
 * Insert the data
 */

/**
 *
 * the upload function
 *
 * @access public
 *
 * @return void
 *
 */
function upload1(){
    //var_dump($_FILES['userfile']);
    echo "<PRE>";
    print_r($_FILES['userfile']);
    echo "</PRE>";
}
function upload(){
    /*** check if a file was uploaded ***/
    if(is_uploaded_file($_FILES['userfile']['tmp_name']) )//&& getimagesize($_FILES['userfile']['tmp_name']) != false)
    {
        /***  get the image info. ***/
        //$size = getimagesize($_FILES['userfile']['tmp_name']);
        $size = $_FILES['userfile']['size'];

        /*** assign our variables ***/
        $type = $_FILES['userfile']['type'];
        echo '$type => '. + $type;
        $imgfp = fopen($_FILES['userfile']['tmp_name'], 'rb');
        //$size = $size[3];
        //$size = $_FILES['userfile']['size'];
        echo 'Size => '. + $size;
        $name = $_FILES['userfile']['name'];
        $maxsize = 99999999;


        /***  check the file is less than the maximum file size ***/
        if($_FILES['userfile']['size'] < $maxsize )
        {
            /*** connect to db ***/
            $dbh = new PDO("mysql:host=localhost:3306;dbname=Test01", 'root', '');

            /*** set the error mode ***/
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<BR/>step X';
            /*** our sql query ***/
            $stmt = $dbh->prepare("INSERT INTO my_files (type ,data, size, name, created, modified) VALUES (:type ,:data, :size, :name, :created,:modified)");
            //echo '<BR/>step Y => sql statement'. $stmt;
            /*** bind the params ***/
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':data', $imgfp, PDO::PARAM_LOB);
            $stmt->bindParam(':size', $size);
            $stmt->bindParam(':name', $name);
            $datetiemnow = date("Y-m-d H:i:s");
            $stmt->bindParam(':created', $datetiemnow);
            $stmt->bindParam(':modified', $datetiemnow);

            /*** execute the query ***/
            $stmt->execute();
            Echo "Upload file :$name  stored in database";
        }
        else
        {
            /*** throw an exception is image is not of type ***/
            throw new Exception("File Size Error");
        }
    }
    else
    {
        // if the file is not less than the maximum allowed, print an error
        throw new Exception("Unsupported Image Format!");
    }
}

/**
 * insert blob into the files table
 * @param string $filePath
 * @param string $mime mimetype
 */
/*
public function insertBlob($filePath,$mime){
    $blob = fopen($filePath,'rb');

    $sql = "INSERT INTO files(mime,data) VALUES(:mime,:data)";
    $stmt = $this->conn->prepare($sql);

    $stmt->bindParam(':mime',$mime);
    $stmt->bindParam(':data',$blob,PDO::PARAM_LOB);

    return $stmt->execute();
}
*/
?>