FROM php:apache
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y python3
RUN apt install -y python3-dev python3-numpy python3-pip
RUN pip3 install --upgrade pip
RUN pip3 install --upgrade tensorflow
RUN pip3 install --upgrade keras
RUN pip3 install opencv-python
RUN apt-get install -y libgl1-mesa-glx
EXPOSE 80
