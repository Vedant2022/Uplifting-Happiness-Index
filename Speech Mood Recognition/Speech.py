import glob
import os
import pickle
import librosa
import numpy as np
import sounddevice as sd
import soundfile
from scipy.io.wavfile import write

#DataFlair - Extract features (mfcc, chroma, mel) from a sound file
def extract_feature(file_name, mfcc, chroma, mel):
    with soundfile.SoundFile(file_name) as sound_file:
        X = sound_file.read(dtype="float32")
        sample_rate=sound_file.samplerate
        if chroma:
            stft=np.abs(librosa.stft(X))
        result=np.array([])
        if mfcc:
            mfccs=np.mean(librosa.feature.mfcc(y=X, sr=sample_rate, n_mfcc=40).T, axis=0)
            result=np.hstack((result, mfccs))
        if chroma:
            chroma=np.mean(librosa.feature.chroma_stft(S=stft, sr=sample_rate).T,axis=0)
            result=np.hstack((result, chroma))
        if mel:
            mel=np.mean(librosa.feature.melspectrogram(X, sr=sample_rate).T,axis=0)
            result=np.hstack((result, mel))
        return result

def Predict_Result(model, file_name):
    x=[]
    file = "Speech\\{}.wav".format(file_name)
    feature=extract_feature(file, mfcc=True, chroma=True, mel=True)
    x.append(feature)
    y_pred = model.predict(np.array(x))
    return y_pred[0]

def Take_Command():
    print('Listening...')
    fs = 41000  # Sample rate
    seconds = 4  # Duration of recording
    myrecording = sd.rec(int(seconds * fs), samplerate=fs, channels=1)
    sd.wait()  # Wait until recording is finished
    write('Speech\\output.wav', fs, myrecording)  # Save as WAV file

if __name__ == '__main__':

    #DataFlair - Emotions in the RAVDESS dataset
    emotions={
    '01':'neutral',
    '02':'calm',
    '03':'happy',
    '04':'sad',
    '05':'angry',
    # '06':'fearful',
    '07':'disgust',
    '08':'surprised'
    }

    # Emotions to observe
    observed_emotions=['happy', 'surprised', 'sad']

    pickled_model = pickle.load(open('model.pkl', 'rb'))

    Take_Command()

    file_name = 'output'
    # file_name = input('Enter the File name: ')
    print('Result: ',Predict_Result(pickled_model, file_name))