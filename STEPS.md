# Documentation On How To Run WordPress On An EC2 Instance And Use An RDS Instance As The WordPress DataBase

# STEP 1 {Launch Instance}

i. Navigate to your AWS Management Console.

ii. Under your Services, Click Compute, then click EC2.

iii. After clicking EC2, you'll Click Launch EC2 Instances.

iv. Then you input the name of the instance and specify the AMI {Amazon Machine Image}.

v. Choose the Instance type and your Security Group which allows traffic in and out of your EC2 Instance.

vi. Create a new Key pair in order to SSH into the instance later, specify the storage size also "On default it's 8 Gib".

vii. After Specifying all that, click launch instances.

========================================================================================================================================================================

# STEP 2 {Create the Database for Wordpress (RDS Instance)}

i. Still in the AWS Management Console, navigate to RDS under your services, and click Database in the left navigation pane and click create database.

ii. Name your Database identifier (Note, the DB identifier is not equal to the DB name) , then choose the DB engine (i prefer MYSQL), Fill in the space for credentials and specify your username and password for your DB.

iii. Under Your Network configuration , specify your DB Subnet Group and you SG which stands for security group as discussed earlier and make sure that port 3306 is allowed because its the port for MYSQl.

iv. After Specifying all that, Click create database and wait for 4 minuites and copy the endpoint of the RDS instance into a notepad.

============================================================================================================================================================================

# STEP 3 {SSH into the EC2 Instance and install wordpress on docker}

i. First of all to SSH into your instance, you open your WSL based distro of Linux OS or any other terminal or Putty (follow this link on how to use putty {https://bitlaunch.io/blog/how-to-connect-to-ssh-with-putty/}), 

ii. When on your terminal, navigate into the directory that your key-pair is located, and replicate it to your home directory using thi command ;

cd /mnt/<the path to the file >
cp -r <name of the key-pair.pem> ~/

(Note that the above command is to be edited and its function is to move into the directory that the key-pair is stored and the other is to copy it to your home directory ~/)
  
 iii. Then cd back into your home directory by typing cd and you give the key pair permissions by typing "chmo 400 <key-pair name.pem>"  {the 400 means read=4 for users and 0 for groups and others}
  
 iv. After doing that successfully, you now SSH into your instance using the SSH command "ssh -i <key-pair.pem> AMI-name@public-ip-address"
  
 v. After succesfully typing that correctly , you'll be prompted to either type yes or no .{type yes }
  
 vi. After authenticating successfully , you run the following commands to install Docker in order to run wordpress.
  update your package manager, this might differ depending on the flavor of linux you are using. 
 sudo apt-get update 
  
 sudo apt install docker.io
  
 sudo usermod -aG docker $USER
 
 exit and log back in
  
 vii. After you've installed docker, validate it by typing "docker ps " 
  
=========================================================================================================================================================================================================
  
# STEP 4 {Run WordPress and map its port and add a persistent volume }  

 i. First of all when running wordpress, you must know the container path and also the port you're mapping to must be exposed, run this following command in order to run it.
   docker run -p 80:80 -d -v /path_of_your_host:/var/www/html wordpress
   

   the above command pulls wordpress from dockerhub and runs it on port 80 of the host machine and -d for detatched mode {running behind the scenes} -v for persistent volume in other to prevent data loss (the first path is the path to directory in your host and the /var/www/html is the path in the container.)

ii. After running this command. paste your ip address into a browser and you'll be taken to a WordPress installation page.
  
iii.  Next, specify the language and fill in the space for the database name with the credentials of the RDS instance and paste the endpoint you copied earlier into the space written "local host " and click "submit".
  
iv. Next you fill in the spaces for site-title and click install. "You'll be taken to the WP-ADMIN Dashboard to customise your website" .
  
  
                                                               # THANK YOU
