#!/bin/bash

clear

set -x

source variables.sh

export AWS_PAGER=""

aws ec2 run-instances \
    --image-id $IMAGE_ID \
    --count $COUNT \
    --instance-type $INSTANCE_TYPE \
    --key-name $KEY_NAME \
    --security-groups $SECURITY_GROUP_DEFAULT \
    --tag-specifications "ResourceType=instance,Tags=[{Key=Name,Value=$INSTANCE_NAME}]" \
    --user-data file://comands.sh
