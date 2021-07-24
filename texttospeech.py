from ibm_watson import TextToSpeechV1
from ibm_cloud_sdk_core.authenticators import IAMAuthenticator

url= 'https://api.us-south.text-to-speech.watson.cloud.ibm.com/instances/fc5f553a-3fe9-49ab-936d-2f5846bd484f'
apikey = 'wFS21EbQaeF7WFjc3n_c0i42nKw0cuZhtZjJ3sdLPIhr'

authenticator = IAMAuthenticator(apikey)
tts = TextToSpeechV1(authenticator=authenticator)
tts.set_service_url(url)

with open('test.txt', 'r') as f:
    text = f.readlines()

text = [line.replace('\n','') for line in text]

text = ''.join(str(line) for line in text)


with open('./speech.mp3', 'wb') as audio_file:
    res = tts.synthesize(text, accept='audio/mp3', voice='en-GB_JamesV3Voice').get_result()
    audio_file.write(res.content)

