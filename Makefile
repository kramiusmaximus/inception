start_machine:
		docker-machine start inception || true
		eval $(docker-machine env inception)

stop_machine:
		docker-machine stop inception

start:
		echo "Starting docker containers..."
		docker-compose -f srcs/docker-compose.yml up

stop:
		echo "Stopping docker containers..."
		docker-compose -f srcs/docker-compose.yml down

build:
		docker-compose -f srcs/docker-compose.yml build

fbuild:
		docker-compose -f srcs/docker-compose.yml build --no-cache

clean:	stop
		sudo rm -rf /home/pfelipa/data/*/*
		docker ps -qa | xargs docker stop || true
		docker ps -qa | xargs docker rm || true
		docker images -qa || xargs docker rmi -f || true
		docker volume ls -q || xargs docker volume rm || true 
		docker network ls -q || xargs docker network rm

