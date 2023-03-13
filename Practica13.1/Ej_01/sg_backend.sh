#!/bin/bash

clear

set -x

source variables.sh

export AWS_PAGER=""

aws ec2 create-security-group \
    --group-name $GROUP_NAME \
    --description "$DESCRIPTION"


aws ec2 authorize-security-group-ingress \
    --group-name $GROUP_NAME \
    --protocol $PROTOCOL \
    --port $SSH_PORT \
    --cidr $CIDR

aws ec2 authorize-security-group-ingress \
    --group-name $GROUP_NAME \
    --protocol $PROTOCOL \
    --port $MYSQL_PORT \
    --cidr $CIDR