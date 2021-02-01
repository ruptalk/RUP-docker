import sys
import cv2
import numpy as np
import tensorflow as tf
from keras.models import load_model

image_w = 32
image_h = 32

test_img = []

#file_path=sys.argv[1]
file_path='/var/www/html/py/0A32eTdBKayjCWhZqDOQ.png'
img = cv2.imread(file_path)

img = cv2.resize(img, None,fx=image_w/img.shape[1],fy=image_h/img.shape[0])
img = img[:,:,0].reshape(image_w,image_h,1)

test_img.append(img/256)
test_img = np.array(test_img)

CNN = load_model('/var/www/html/model/CNN.h5')

print(CNN.predict_classes(test_img))
