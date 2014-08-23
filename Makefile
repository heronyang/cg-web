# this is now only tested on Ubuntu 12.04
install:
	git clone https://github.com/jayrambhia/Install-OpenCV.git
	sudo apt-get install libopencv-dev	# OpenCV
	sudo apt-get install ffmpeg
	sudo apt-get install python-pip python-dev build-essential
	sudo easy_install pip
	sudo pip install --upgrade virtualenv
	sudo pip install images2gif
	sudo pip install pil
	sudo apt-get install lamp-server^

install_apache:
	sudo apt-get install apache2
	#cp cg.conf /etc/apache2/sites-available/
	sudo a2ensite cg
	sudo service apache2 reload
	sudo service apache2 restart

install_php:
	sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
