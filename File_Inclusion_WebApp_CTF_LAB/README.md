# File Inclusion WebApp CTF Lab
## By OffensiveBytes
### Language: PHP

## Capture The Flag:
### Vulnerable to

1. Local File Inclusion
    - Challenge: To find the web configuration file
3. Remote File Inclusion
    - Challenge: To find secret page in this WebApp
4. LFI2RCE via PHP Filters
    - Challenge: To get the RCE

## Deployment Method - Container
```
cd Web-CTF-Labs/File_Inclusion_WebApp_CTF_LAB
docker build -t travel-easy .
docker run -d -p 80:80 --name travel-easy-container travel-easy
# After this Lab would be accessible via http://<IP>:80 
```
## Screnshots:
![RFI_LAb_1](https://github.com/user-attachments/assets/7f58f2bf-fb0d-4917-b09d-a7d738b5d98a)
![RFI_LAb_2](https://github.com/user-attachments/assets/424fa029-e09c-4e45-9392-3cd5b05e9901)

Thanks
OffensiveBytes Team
