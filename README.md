# docker-< REPO NAME >
Short Description


## Portainer

- Build repo based on this template
  - Change docker-compose.yml and .env.example
- Build image using Github Actions
- Open Portainer
  - Add github url
  - Import .env.example and edit environment variables
  - Deploy stack

## docker compose

### Building & running the image
```
git clone https://github.com/vslcatena/docker-<reponame>1
cd docker-<reponame>
docker-compose up --build --force-recreate -d
```

### Stopping the container
```
docker-compose down
```

### Use container
```
http://hostname.or.ip:<designated port>
```
