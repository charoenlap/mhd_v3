import React, { Component } from "react";
import { Form, Input, Image, Card, Layout, Row, Col } from "antd";
import { UserOutlined, LockOutlined } from "@ant-design/icons";
import { Link } from "react-router-dom";

const { Content } = Layout;

class Register extends Component {
  render() {
    const onFinish = (values) => {
      console.log("Received values of form: ", values);
    };

    // const onFinishFailed = (errorInfo) => {
    //   console.log("Failed:", errorInfo);
    // };
    return (
      <Layout>
        <Content className="bgLogin">
          <Row>
            <Col span={20} offset={2}>
              <Image src="/images/header.png" />
            </Col>
            <Col span={20} offset={2}>
              <Card
                title="สมัครสมาชิก"
                extra={<Link src="./login">กลับไปเข้าสู่ระบบ</Link>}
              >
                <Form
                  name="normal_register"
                  className="login-form"
                  initialValues={{ remember: true }}
                  onFinish={onFinish}
                >
                  <Form.Item
                    name="email"
                    rules={[
                      {
                        required: true,
                        message: "กรุณากรอกอีเมล!",
                      },
                    ]}
                  >
                    <Input
                      prefix={<UserOutlined className="site-form-item-icon" />}
                      placeholder="Email Address"
                    />
                  </Form.Item>
                  <Form.Item
                    name="password"
                    rules={[
                      {
                        required: true,
                        message: "กรุณากรอกรหัสผ่าน!",
                      },
                    ]}
                  >
                    <Input
                      prefix={<LockOutlined className="site-form-item-icon" />}
                      type="password"
                      placeholder="Password"
                    />
                  </Form.Item>

                  <Form.Item
                    name="password"
                    rules={[
                      {
                        required: true,
                        message: "กรุณายืนยันรหัสผ่าน!",
                      },
                    ]}
                  >
                    <Input
                      prefix={<LockOutlined className="site-form-item-icon" />}
                      type="password"
                      placeholder="Confirm Password"
                    />
                  </Form.Item>
                </Form>
              </Card>
            </Col>
          </Row>
        </Content>
      </Layout>
    );
  }
}

export default Register;
