# this is now only tested on Ubuntu 12.04
install:
	git clone https://github.com/jayrambhia/Install-OpenCV.git
	sh Install-OpenCV/Ubuntu/opencv_latest.sh
	sudo apt-get install ffmpeg
	sudo apt-get install python-pip python-dev build-essential
	sudo easy_install pip
	sudo pip install --upgrade virtualenv
	sudo pip install images2gif
	sudo pip install pil
	sudo apt-get install lamp-server^
