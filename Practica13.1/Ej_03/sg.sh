#!/bin/bash

clear

set -x

export AWS_PAGER=""

source variables.sh

aws ec2 create-security-group \
    --group-name $SECURITY_GROUP_NAME_BALANCER \
    --description "$DESCRIPTION_BALANCER"

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_BALANCER \
    --protocol $PROTOCOL \
    --port $SSH_PORT \
    --cidr $CIDR

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_BALANCER \
    --protocol $PROTOCOL \
    --port $HTTPS_PORT \
    --cidr $CIDR
 
 aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_BALANCER \
    --protocol $PROTOCOL \
    --port $HTTP_PORT \
    --cidr $CIDR

aws ec2 create-security-group \
    --group-name $SECURITY_GROUP_NAME_FRONTEND_BALANCER \
    --description "$DESCRIPTION_FRONTEND_BALANCER"

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_FRONTEND_BALANCER \
    --protocol $PROTOCOL \
    --port $SSH_PORT \
    --cidr $CIDR

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_FRONTEND_BALANCER \
    --protocol $PROTOCOL \
    --port $HTTP_PORT \
    --cidr $CIDR

aws ec2 create-security-group \
    --group-name $SECURITY_GROUP_NAME_BACKEND \
    --description "$DESCRIPTION_BACKEND"

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_BACKEND \
    --protocol $PROTOCOL \
    --port $SSH_PORT \
    --cidr $CIDR

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_BACKEND \
    --protocol $PROTOCOL \
    --port $MYSQL_PORT \
    --cidr $CIDR

aws ec2 create-security-group \
    --group-name $SECURITY_GROUP_NAME_NFS_SERVER \
    --description "$DESCRIPTION_NFS_SERVER"

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_NFS_SERVER \
    --protocol $PROTOCOL \
    --port $SSH_PORT \
    --cidr $CIDR

aws ec2 authorize-security-group-ingress \
    --group-name $SECURITY_GROUP_NAME_NFS_SERVER \
    --protocol $PROTOCOL \
    --port $NFS_PORT \
    --cidr $CIDR

./ec2_wp.sh
