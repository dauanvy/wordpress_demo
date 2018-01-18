FROM mysql/mysql-server:5.7

MAINTAINER Nghiem Ba Hieu

ADD topland2017.tar.gz /docker-entrypoint-initdb.d/
ENV MYSQL_ALLOW_EMPTY_PASSWORD yes
ENV MYSQL_USER topland2017
ENV MYSQL_DATABASE topland2017
ENV MYSQL_PASSWORD toplandsmt2017
ENV MYSQL_ROOT_HOST %
EXPOSE 3306
CMD ["mysqld"]
