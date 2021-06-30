start_machine:
		docker-machine start inception || true
		eval $(docker-machine env inception)

stop_machine:
		docker-machine stop inception

start:
		echo "Starting docker containers..."
		docker-compose -f srcs/docker-compose.yaml up

stop:
		echo "Stopping docker containers..."
		docker-compose -f srcs/docker-compose.yaml down

build:
		docker-compose -f srcs/docker-compose.yaml build

fbuild:
		docker-compose -f srcs/docker-compose.yaml build --no-cache

clean:	stop
		sudo rm -rf /home/pfelipa/data/*/*
		docker ps -aq | xargs docker rm  -f || true
		docker volume ls -q | xargs docker volume rm || true		

